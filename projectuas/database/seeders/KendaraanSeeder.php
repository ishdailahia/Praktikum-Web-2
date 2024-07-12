<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            ['id' => 1, 'nama' => 'Sedan'],
            ['id' => 2, 'nama' => 'SUV'],
            ['id' => 3, 'nama' => 'Minibus'],
            // Tambahkan data lainnya di sini
        ]);
    }
}
