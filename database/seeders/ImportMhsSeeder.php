<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\LazyCollection;

class ImportMhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::disableQueryLog();

        LazyCollection::make(function(){
            $handle = fopen(public_path('storage/ImportDataMhs/mhs.csv'), 'r');
            while(($line = fgetcsv($handle, 4096)) !== false){
                $dataString = implode('; ', $line);
                $row =  explode(';', $dataString);
                yield $row;
            }

            fclose($handle);
        })

        ->skip(1)
        ->chunk(1000)
        ->each(function(LazyCollection $chunk){
            $records = $chunk->map(function($row){
                return [
                    'id'=>$row[1],
                    'nama'=>$row[2],
                    'password'=>Hash::make($row[0]),
                    'nomor_tlp'=>null,
                    'role'=>'mahasiswa',
                    'angkatan'=>$row[3],
                    'status'=>'aktif',
                    'departemen'=>'Informatika',
                    'fakultas'=>'Fakultas Sains dan Matematika',
                    'jalur_masuk'=>null,
                    'provinsi'=>null,
                    'kabupaten'=>null,
                    'alamat'=>null,
                    'foto'=>null,
                    'dsn_id'=>$row[4],

                ];
            })->toArray();

            DB::table('mahasiswas')->insert($records);
        });
    }
}
