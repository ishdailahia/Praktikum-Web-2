<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Armada;
use App\Models\Pembayaran;
use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KendaraanSeeder::class,
            ArmadaSeeder::class,
            PeminjamanSeeder::class,
            PembayaranSeeder::class,
        ]);
    }
}
