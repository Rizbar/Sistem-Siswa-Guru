<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes (assuming you have generated them with 'php artisan make:auth')
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

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

Route::get('/PembimbingGuru', function () {
    return view('Guru/pembimbing');
});

Route::get('/DataSiswa', function () {
    return view('Guru/datasiswa');
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