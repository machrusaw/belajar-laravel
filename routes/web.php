<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Halo saya machrus';
});

Route::get('/selamat-datang', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class,'index']);

Route::get('/bukuu', [BukuController::class,'index'])->name('buku.index');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class,'edit'])->name('buku.edit');
Route::put('/buku/{id}/update', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}/delete', [BukuController::class, 'destroy'])->name('buku.delete');