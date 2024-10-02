<?php

use App\Http\Controllers\BukuController;
// use App\Http\Livewire\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/admin', function () {
    return view('admin/dashboard');
});
// Route::get('/buku', function () {
//     return view('buku/index');
// });
// Route::get('/buku/tambah-buku', function () {
//     return view('buku/create');
// });
Route::resource('buku', BukuController::class);
