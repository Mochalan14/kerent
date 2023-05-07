<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('user.index');
    Route::get('/sewaku', 'sewaku')->name('sewaku')->middleware('auth');
    Route::get('/sewamobil', 'buatSewa')->middleware('auth');
    Route::post('/prosesSewa', 'prosesSewa');
    Route::post('/kirimBukti', 'uploadBukti');
    Route::get('/detailsewa/{id}', 'detailsewa')->name('sewa.detail');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register');
    Route::get('/logout', 'logout');
    Route::post('/registerproses', 'registerproses');
    Route::post('/proseslogin', 'proseslogin');
});
