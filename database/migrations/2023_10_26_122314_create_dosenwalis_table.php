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
        Schema::create('dosenwalis', function (Blueprint $table) {
            $table->unsignedBigInteger('id'); // Use unsignedBigInteger instead of id()
            $table->primary('id'); // Set id as the primary key
            $table->string('nama');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('nomor_tlp')->nullable();
            $table->string('role')->default('dosenwali');
            $table->string('departemen')->default('Informatika');
            $table->string('fakultas')->default('Sains dan Matematika');
            $table->rememberToken();
            $table->timestamps();
        });
    }

};
