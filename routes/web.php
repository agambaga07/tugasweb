<?php

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


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/simpanuser', 'Usere@simpanuser');

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', 'Usere@logout');


Route::post('/loginpost', 'Usere@loginpost');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/profile', function () {
    return view('profile');
});
