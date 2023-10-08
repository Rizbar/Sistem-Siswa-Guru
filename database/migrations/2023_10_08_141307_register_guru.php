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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->boolean('status')->nullable();
            $table->string('NIP')->unique();
            $table->string('Jenis_Kelamin');
            $table->string('Tempat_Lahir');
            $table->string('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('No_Telepon');
            $table->string('Agama');
            $table->string('Awal_Tanggal_Sertifikat');
            $table->string('Akhir_Tanggal_Sertifikat');
            $table->string('Jabatan');
            $table->string('Status_Guru');
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
        Schema::dropIfExists('guru');
    }
};
