<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konfirmasi;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index(Request $request)
    {
        $perlukonfirmasi = Penyewaan::where('konfirmasi_id', 2)->get();
        $sudahkonfirmasi = Penyewaan::where('konfirmasi_id', 3)->get();
        $title = 'Daftar Penyewaan';
        return view('admin.penyewaan.index', compact('sudahkonfirmasi', 'perlukonfirmasi', 'title'));
    }

    public function konfirmasi($id)
    {
        $penyewaan = Penyewaan::where('id', $id)->first();
        $konfirmasi = Konfirmasi::all();
        return view('admin.penyewaan.konfirmasi', compact('penyewaan', 'konfirmasi'));
    }

    public function proseskonfirmasi(Request $request, $id)
    {
        $penyewaan = Penyewaan::where('id', $id)->first();
        $penyewaan->update([
            'konfirmasi_id' => $request->konfirmasi_id
        ]);

        return redirect()->route('admin.transaksi.index');
    }

    public function destroy($id)
    {

        $penyewaan = Penyewaan::where('id', $id)->first();
        $penyewaan->delete();

        return redirect()->route('admin.transaksi.index');
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Mobil $mobil)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_mobil' => 'required',
    //         'harga_sewa' => 'required|numeric',
    //         'status_id' => 'required',
    //     ]);

    //     // Mengupdate data mobil ke database
    //     $mobil->nama_mobil = $request->nama_mobil;
    //     $mobil->harga_sewa = $request->harga_sewa;
    //     $mobil->status_id = $request->status_id;
    //     $mobil->save();

    //     // Redirect ke halaman daftar mobil dengan pesan sukses
    //     return redirect()->route('admin.mobil.index')->with('success', 'Data mobil berhasil diupdate.');
    // }
}
