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
        Schema::create('departemens', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id'); // Use unsignedBigInteger instead of id()
            $table->primary('id'); // Set id as the primary key
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nomor_tlp')->nullable();
            $table->string('role')->default('departemen');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departemens');
    }
};
