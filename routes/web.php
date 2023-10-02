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
    return view('Layout/main');
});

Route::get('/biodataguru', function () {
    return view('Guru/navbarguru');
});

Route::get('/login', function () {
    return view('Layout/login');
});

Route::get('/register', function () {
    return view('Layout/register');
});