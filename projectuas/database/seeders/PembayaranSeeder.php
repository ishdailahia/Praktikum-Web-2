<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [
                'tanggal' => '2024-07-15',
                'jumlah_bayar' => 2500000.00,
                'peminjaman_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2024-08-02',
                'jumlah_bayar' => 1500000.00,
                'peminjaman_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya di sini
        ]);
    }
}
