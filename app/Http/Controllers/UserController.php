<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view('user.pages.index', compact(['mobil']));
    }

    public function sewaku()
    {
        $user_id = Auth::user()->id;
        $daftarsewa = Penyewaan::where('user_id', $user_id)->get();
        return view('user.pages.sewaku', compact(['daftarsewa']));
    }

    public function buatSewa()
    {
        $mobil = Mobil::all();
        return view('user.pages.sewa.create', compact(['mobil']));
    }

    public function prosesSewa(Request $request)
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

        return redirect()->route('sewaku');
    }

    public function detailsewa($id)
    {
        $detailsewa = Penyewaan::where('id', $id)->get();
        return view('user.pages.detailsewa', compact(['detailsewa']));
    }
}
