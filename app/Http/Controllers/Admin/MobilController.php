<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CarStoreRequest;
use App\Http\Requests\Admin\CarUpdateRequest;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Models\Car;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class MobilController extends Controller
{
    public function index(Request $request)
    {
        $mobils = Mobil::all();
        $title = 'Daftar Mobil';
        return view('admin.mobil.index', compact('mobils', 'title'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mobil' => 'required',
            'harga_sewa' => 'required|numeric',
            'status_id' => 'required',
        ]);
    
        // Menyimpan data mobil baru ke database
        $mobil = new Mobil();
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->status_id = $request->status_id;
        $mobil->save();
    
        // Redirect ke halaman daftar mobil dengan pesan sukses
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil berhasil disimpan.');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        // Validasi input
        $request->validate([
            'nama_mobil' => 'required',
            'harga_sewa' => 'required|numeric',
            'status_id' => 'required',
        ]);
    
        // Mengupdate data mobil ke database
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->status_id = $request->status_id;
        $mobil->save();
    
        // Redirect ke halaman daftar mobil dengan pesan sukses
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil berhasil diupdate.');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        // Menghapus data mobil dari database
        $mobil->delete();
    
        // Redirect ke halaman daftar mobil dengan pesan sukses
        return redirect()->route('admin.mobil.index')->with('success', 'Data mobil berhasil dihapus.');
    }
    
}
