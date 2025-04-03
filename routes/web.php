<?php

use App\Livewire\Home;
use App\Livewire\Kontak;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/kontak', Kontak::class);