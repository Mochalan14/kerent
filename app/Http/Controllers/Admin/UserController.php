<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role_id', 2)->get();
        $title = 'Daftar User';
        return view('admin.user.index', compact('users', 'title'));
    }

    public function create(Request $request)
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Menyimpan data mobil baru ke database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 2;
        $user->save();

        return redirect()->route('admin.user.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('admin.user.index');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('admin.user.index');
    }
}
