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
        Schema::create('khs', function (Blueprint $table) {
            $table->id();
            $table->integer('sks_smt');
            $table->integer('sks_komulatif');
            $table->double('ips');
            $table->double('ipk');
            $table->string('file_khs')->nullable();
            $table->string('semester');
            $table->integer('flag')->default(0);
            $table->foreignId('mhs_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khs');
    }
};
