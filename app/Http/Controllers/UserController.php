<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view('user.pages.index', compact(['mobil']));
    }

    public function sewaku()
    {
        $daftarsewa = Penyewaan::where('user_id', 1)->get();
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
        $tanggalsewa = date_create($request->get('tanggal_sewa'));
        $tanggalkembali = date_create($request->get('tanggal_kembali'));
        $interval = date_diff($tanggalsewa, $tanggalkembali);
        $jumlahHari = $interval->format('%a');
        $hargasewa = Mobil::where('id', $idmobil)->pluck('harga_sewa');
        $hargasewa = $hargasewa[0];

        $totalHarga = $jumlahHari * $hargasewa;


        Penyewaan::create([
            'user_id'     => 1,
            'mobil_id'     => $idmobil,
            'tanggal_sewa'   => $tanggalsewa,
            'tanggal_kembali'   => $tanggalkembali,
            'konfirmasi_id' => 1,
            'total_harga' => $totalHarga,
            'bukti_pembayaran' => 0,
        ]);

        return redirect()->route('sewaku');
    }
}
