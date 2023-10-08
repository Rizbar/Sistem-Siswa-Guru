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
    return view('Layout/beranda');
});

Route::get('/guru', function () {
    return view('Layout/guru');
});

Route::get('/jurusan', function () {
    return view('Layout/jurusan');
});

Route::get('/login', function () {
    return view('Layout/login');
});

Route::get('/register', function () {
    return view('Layout/register');
});

Route::get('/BiodataGuru', function () {
    return view('Guru/biodata');
});

Route::get('/UploadGuru', function () {
    return view('Guru/uploadSertifikat');
});

Route::get('/DaftarSiswa', function () {
    return view('Guru/daftarsiswa');
});

Route::get('/KelasWali', function () {
    return view('Guru/kelaswali');
});

Route::get('/PembimbinganGuru', function () {
    return view('Guru/pembimbing');
});

Route::get('/BiodataSiswa', function () {
    return view('Siswa/biodatasiswa');
});

Route::get('/UploadDokumen', function () {
    return view('Siswa/uploadDokumen');
});

Route::get('/PembimbingSiswa', function () {
    return view('Siswa/pembimbing');
});

Route::get('/login', function () {
    return view('Layout/login');
});

Route::get('/register', function () {
    return view('Layout/register');
});