<?php

use App\Livewire\{About, Welcome};
use Illuminate\Support\Facades\Route;
use App\Livewire\Bit\Dokumentasi\Komponen;
use BaconQrCode\Common\BitArray;
use App\Http\Livewire\Bit\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class)->name('home');
Route::get('/about', About::class)->name('about');

Route::get('/bit', \App\Livewire\Bit\Index::class)->name('bit');
Route::get('/bit/dokumentasi/komponen', Komponen::class)->name('bit.dokumentasi.komponen');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});
