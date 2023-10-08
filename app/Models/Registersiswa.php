<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registersiswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'NISN',
        'Jenis_Kelamin',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat',
        'No_Telepon',
        'Agama',
        'Kelas',
        'Jurusan',
        'Nama_Ayah',
        'Nama_Ibu',
        'Pekerjaan_Ayah',
        'Pekerjaan_Ibu',
        'Alamat_Orang_Tua',
        'No_Telepon_Orang_Tua',
        'Asal_Sekolah',
    ];
}