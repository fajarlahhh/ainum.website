<?php

use App\Livewire\Home;
use App\Livewire\Infotagihan;
use App\Livewire\Kontak;
use App\Livewire\Pengaduan;
use App\Livewire\Pasangbaru;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/kontak', Kontak::class);
Route::get('/privacypolicy/catat', function () {
    return view('privacypolicy.catat');
});
Route::get('/infotagihan', Infotagihan::class);
Route::get('/pengaduan', Pengaduan::class);
Route::get('/pasangbaru', Pasangbaru::class);