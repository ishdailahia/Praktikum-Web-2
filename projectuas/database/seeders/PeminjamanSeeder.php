<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjaman')->insert([
            [
                'id' => 1,
                'nama_peminjam' => 'John Doe',
                'ktp_peminjam' => '1234567890123456',
                'keperluan_pinjam' => 'Liburan keluarga',
                'mulai' => '2024-07-15',
                'selesai' => '2024-07-20',
                'biaya' => 5000000.00,
                'armada_id' => 1,
                'komentar_peminjam' => 'Mobil sangat nyaman',
                'status_pinjam' => 'Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_peminjam' => 'Jane Smith',
                'ktp_peminjam' => '0987654321098765',
                'keperluan_pinjam' => 'Perjalanan bisnis',
                'mulai' => '2024-08-01',
                'selesai' => '2024-08-05',
                'biaya' => 3000000.00,
                'armada_id' => 2,
                'komentar_peminjam' => 'Pengemudi profesional',
                'status_pinjam' => 'Sedang Berjalan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya di sini
        ]);
    }
}
