<?php

use App\Livewire\{About, Welcome};
use Illuminate\Support\Facades\Route;
use App\Livewire\Bit\Dokumentasi\Komponen;
use BaconQrCode\Common\BitArray;
use App\Http\Livewire\Bit\Index;

Route::get('/', Welcome::class)->name('home');

// Betech doc
Route::get('/bit/dokumentasi/komponen', Komponen::class)->name('bit.doc.component');

// handle fallback route
Route::fallback(function () {
    return redirect()->route('not-found');
});
Route::get('/not-found', \App\Livewire\Error\NotFound::class)->name('not-found');

// Logged in user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //universal
    Route::get('/dashboard', Welcome::class)->name('dashboard');
    Route::get('/about', About::class)->name('about');
    Route::get('/bit', \App\Livewire\Bit\Index::class)->name('bit');
    Route::get('/users', \App\Livewire\User\Index::class)->name('users');
});
