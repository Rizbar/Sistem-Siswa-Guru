<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registerguru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'NIP',
        'Jenis_Kelamin',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat',
        'No_Telepon',
        'Agama',
        'Awal_Tanggal_Sertifikat',
        'Akhir_Tanggal_Sertifikat',
        'Jabatan',
        'Status_Guru',
    ];
}
