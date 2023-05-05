<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konfirmasi;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index(Request $request)
    {
        $konfirmasis = Konfirmasi::all();
        $title = 'Daftar Konfirmasi';
        return view('admin.konfirmasi.index', compact('konfirmasis', 'title'));
    }

    public function create(Request $request)
    {
        return view('admin.konfirmasi.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $konfirmasis = Konfirmasi::create([
            'konfirmasi' => $data['konfirmasi'],
        ]);

        return redirect()->route('admin.konfirmasi.index');
    }

    public function edit($id)
    {
        $konfirmasi = Konfirmasi::find($id);
        return view('admin.konfirmasi.update', compact('konfirmasi'));
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'konfirmasi' => 'required',
    ]);

    $konfirmasis = Konfirmasi::find($id);
    $konfirmasis->konfirmasi = $request->konfirmasi;
    $konfirmasis->save();

    return redirect()->route('admin.konfirmasi.index');
}

    public function destroy($id)
    {
        $konfirmasis = Konfirmasi::find($id);
        $konfirmasis->delete();

        return redirect()->route('admin.konfirmasi.index');
    }
}
