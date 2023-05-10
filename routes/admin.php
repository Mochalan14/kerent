<?php


use App\Http\Controllers\Admin\KonfirmasiController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\Admin\PenyewaanController;



Route::middleware('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::prefix('/konfirmasi')->name('konfirmasi.')->group(function () {
        Route::get('/', [KonfirmasiController::class, 'index'])->name('index');
        Route::get('/create', [KonfirmasiController::class, 'create'])->name('create');
        Route::post('/store', [KonfirmasiController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [KonfirmasiController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [KonfirmasiController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [KonfirmasiController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/status')->name('status.')->group(function () {
        Route::get('/', [StatusController::class, 'index'])->name('index');
        Route::get('/create', [StatusController::class, 'create'])->name('create');
        Route::post('/store', [StatusController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [StatusController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [StatusController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/role')->name('role.')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('index');
        Route::get('/create', [RoleController::class, 'create'])->name('create');
        Route::post('/store', [RoleController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [RoleController::class, 'update'])->name('update');
        Route::post('/destroy/{id}', [RoleController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/mobil')->name('mobil.')->group(function () {
        Route::get('/', [MobilController::class, 'index'])->name('index');
        Route::get('/create', [MobilController::class, 'create'])->name('create');
        Route::post('/store', [MobilController::class, 'store'])->name('store');
        Route::get('/edit/{mobil}', [MobilController::class, 'edit'])->name('edit');
        Route::put('/update/{mobil}', [MobilController::class, 'update'])->name('update');
        Route::delete('/mobil/{mobil}', [MobilController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/transaksi')->name('transaksi.')->group(function () {
        Route::get('/', [PenyewaanController::class, 'index'])->name('index');
        Route::get('/konfirmasi/{id}', [PenyewaanController::class, 'konfirmasi'])->name('konfirmasi');
        Route::get('/edit/{id}', [PenyewaanController::class, 'edit'])->name('edit');
        Route::put('/proseskonfirmasi/{id}', [PenyewaanController::class, 'proseskonfirmasi'])->name('proseskonfirmasi');
        Route::get('/selesai/{id}', [PenyewaanController::class, 'selesaikan'])->name('selesai');
        Route::put('/update/{id}', [PenyewaanController::class, 'update'])->name('update');
        Route::delete('/transaksi/{id}', [PenyewaanController::class, 'destroy'])->name('destroy');
    });
});
