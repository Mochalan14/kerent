<?php

use App\Http\Controllers\Admin\MobilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->name('index');

Route::prefix('/mobil')->name('mobil.')->group(function () {
    Route::get('/', [MobilController::class, 'index'])->name('index');
    Route::get('/create', [MobilController::class, 'create'])->name('create');
    Route::post('/store', [MobilController::class, 'store'])->name('store');
    Route::get('/edit/{mobil}', [MobilController::class, 'edit'])->name('edit');
    Route::put('/update/{mobil}', [MobilController::class, 'update'])->name('update');
    Route::delete('/mobil/{mobil}', [MobilController::class, 'destroy'])->name('destroy');
});

