<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\LazyCollection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    // function Import Data MHS oleh OPT

    public function run(): void
    {

        \App\Models\operator::factory(2)->create();
        // \App\Models\mahasiswa::factory(20)->create();
        \App\Models\dosenwali::factory(5)->create();
        \App\Models\departemen::factory(2)->create();
        // \App\Models\semester::factory(10)->create();
        // \App\Models\Irs::factory(10)->create();
        // \App\Models\Skripsi::factory(3)->create();
        // \App\Models\Pkl::factory(5)->create();
        // \App\Models\Khs::factory(10)->create();

    }
}
