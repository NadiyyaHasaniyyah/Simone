<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nim')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('email_pribadi')->unique()->nullable();
            $table->string('password');
            $table->string('nomor_tlp')->nullable();
            $table->string('role')->default('mahasiswa');
            $table->string('angkatan');
            $table->string('status');
            $table->string('departemen')->default('Informatika');
            $table->string('fakultas')->default('Sains dan Matematika');
            $table->string('jalur_masuk')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('dsn_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
