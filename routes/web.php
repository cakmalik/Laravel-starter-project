<?php

use App\Http\Livewire\Bit\Index;
use BaconQrCode\Common\BitArray;
use App\Livewire\{About, Welcome};
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Livewire\Bit\Dokumentasi\Komponen;

// Route::get('/', Welcome::class)->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/{lang}', function ($lang) {
    // setcookie('lang', $lang, time() + (86400 * 30), "/");
    Session::put('locale', $lang);
    App::setLocale($lang);
    // if (isset($lang) && in_array($lang, config('app.available_locales'))) {
    //     Session::put('locale', $lang);
    //     App::setLocale($lang);
    // }

    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

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
    Route::get('/users', \App\Livewire\User\UserTable::class)->name('user.table');
});
