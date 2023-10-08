<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Email');
            $table->string('Password');
            $table->boolean('status')->nullable();
            $table->string('NISN')->unique();
            $table->string('Jenis_Kelamin');
            $table->string('Tempat_Lahir');
            $table->string('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('No_Telepon');
            $table->string('Agama');
            $table->string('Nama_Ayah');
            $table->string('Nama_Ibu');
            $table->string('Pekerjaan_Ayah');
            $table->string('Pekerjaan_Ibu');
            $table->string('Alamat_Orang_Tua');
            $table->string('No_Telepon_Orang_Tua');
            $table->string('Kelas');
            $table->string('Jurusan');
            $table->string('url_foto')->default('default.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};