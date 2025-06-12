<?php

use App\Livewire\Home;
use App\Livewire\Kontak;
use App\Livewire\Sejarah;
use App\Livewire\Pengaduan;
use App\Livewire\Pasangbaru;
use App\Livewire\Pengumuman;
use App\Livewire\Infotagihan;
use App\Livewire\Visimisi;
use App\Livewire\Strukturorganisasi;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/kontak', Kontak::class);
Route::get('/privacypolicy/catat', function () {
    return view('privacypolicy.catat');
});
Route::get('/infotagihan', Infotagihan::class);
Route::get('/pengaduan', Pengaduan::class);
Route::get('/pasangbaru', Pasangbaru::class);
Route::get('/sejarah', Sejarah::class);
Route::get('/pengumuman', Pengumuman::class);
Route::get('/strukturorganisasi', Strukturorganisasi::class);
Route::get('/visimisi', Visimisi::class);