<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::prefix('profile')->group(function () {
    Route::get('/index', function () {
        return view('profil.index');
    })->name('profil.index');
    Route::get('/form_bio', function () {
        return view('profil.form_bio');
    })->name('profil.bio');
    Route::get('/form_pendidikan', function () {
        return view('profil.form_pendidikan');
    })->name('profil.pendidikan');

    
    
});
