<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.pages.login');
    }

    public function register()
    {
        return view('auth.pages.register');
    }

    public function registerproses(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2,
        ]);

        return redirect()->route('login');
    }

    public function proseslogin(Request $request)
    {

        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            // return redirect()->route('admin.index');
            return redirect()->route('user.index');
        };

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index');
    }
}
