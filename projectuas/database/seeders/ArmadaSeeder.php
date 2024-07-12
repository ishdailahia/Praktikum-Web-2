<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armada')->insert([
            [
                'foto' => 'car_1',
                'merk' => 'Toyota',
                'nopol' => 'B1234XYZ',
                'thn_beli' => 2020,
                'deskripsi' => 'Minibus',
                'kendaraan_id' => 1,
                'kapasitas_kursi' => 12,
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'foto' => 'car_2',
                'merk' => 'Porche',
                'nopol' => 'B5678XYZ',
                'thn_beli' => 2021,
                'deskripsi' => 'Sport car',
                'kendaraan_id' => 2,
                'kapasitas_kursi' => 40,
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya di sini
        ]);
    }
}
