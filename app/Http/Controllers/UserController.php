<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSewaValidation;
use App\Models\Mobil;
use App\Models\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $mobil = Mobil::where('status_id', 1)->get();
        return view('user.pages.index', compact(['mobil']));
    }

    public function mobil()
    {
        $daftarmobil = Mobil::all();
        return view('user.pages.mobil', compact(['daftarmobil']));
    }

    public function sewaku()
    {
        $user_id = Auth::user()->id;
        $daftarsewa = Penyewaan::where('user_id', $user_id)->get();
        return view('user.pages.sewaku', compact(['daftarsewa']));
    }

    public function buatSewa()
    {
        $mobil = Mobil::where('status_id', 1)->get();
        $jumlahTersedia = count($mobil);
        return view('user.pages.sewa.create', compact(['mobil', 'jumlahTersedia']));
    }

    public function prosesSewa(UserSewaValidation $request)
    {
        $idmobil = $request->get('id_mobil');
        $iduser = $request->user_id;
        $tanggalsewa = date_create($request->get('tanggal_sewa'));
        $tanggalkembali = date_create($request->get('tanggal_kembali'));
        $interval = date_diff($tanggalsewa, $tanggalkembali);
        $jumlahHari = $interval->format('%a');
        $hargasewa = Mobil::where('id', $idmobil)->pluck('harga_sewa');
        $hargasewa = $hargasewa[0];

        $totalHarga = $jumlahHari * $hargasewa;


        Penyewaan::create([
            'user_id'     => $iduser,
            'mobil_id'     => $idmobil,
            'tanggal_sewa'   => $tanggalsewa,
            'tanggal_kembali'   => $tanggalkembali,
            'konfirmasi_id' => 1,
            'total_harga' => $totalHarga,
            'bukti_pembayaran' => 0,
        ]);

        Alert::success('Berhasil', 'Penyewaan Berhasil dibuat, Silahkan Melakukan Pembayaran');
        return redirect()->route('sewaku');
    }

    public function detailsewa($id)
    {
        $idsewa = $id;
        $detailsewa = Penyewaan::where('id', $id)->get();
        return view('user.pages.detailsewa', compact(['detailsewa', 'idsewa']));
    }

    public function uploadBukti(Request $request)
    {

        $sewa = Penyewaan::where('id', $request->id_sewa);
        $file = $request->file('bukti_pembayaran');
        $filename = time()  . '.' . $file->getClientOriginalExtension();


        $photo_path = $request->file('bukti_pembayaran')->storeAs('public/buktitf', $filename);
        $photo_path = str_replace('public/', '', $photo_path);

        $sewa->update([
            'bukti_pembayaran' => $photo_path,
            'konfirmasi_id' => 2,
        ]);

        return redirect()->route('sewaku');
    }

    public function pesanWA(Request $request)
    {
        $nama = $request->nama;
        $pesan = $request->pesan;
        $chat = "Halo, saya $nama ingin menyampaikan pesan '$pesan'";
        return redirect("https://api.whatsapp.com/send?phone=62895343292830&text=$chat");
    }
}
