<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.pages.index');
    }
    public function sewaku(){
        return view('user.pages.sewaku');
    }
}