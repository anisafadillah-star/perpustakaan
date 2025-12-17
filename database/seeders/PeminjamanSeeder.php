<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peminjaman')->insert([
            [
                'tgl_peminjaman' => '2025-10-01',
                'tgl_deadline'   => '2025-10-08',
                'id_user'        => 1, // Anisa
                'id_buku'        => 2, // Bumi Manusia
                'status'         => 'dipinjam',
            ],
            [
                'tgl_peminjaman' => '2025-09-20',
                'tgl_deadline'   => '2025-09-27',
                'id_user'        => 2, // Nurul
                'id_buku'        => 1, // Laskar Pelangi
                'status'         => 'dikembalikan',
            ],
            [
                'tgl_peminjaman' => '2025-09-25',
                'tgl_deadline'   => '2025-10-02',
                'id_user'        => 3, // Admin
                'id_buku'        => 3, // Filosofi Teras
                'status'         => 'dipinjam',
            ],
        ]);
    }
}
