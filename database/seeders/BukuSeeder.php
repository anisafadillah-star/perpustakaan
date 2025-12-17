<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'kode_buku' => 'BK001',
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun_terbit' => 2005,
                'stok_total' => 8,
                'stok_tersedia' => 8,
                'rak_lokasi' => 'A1',
                'status' => 'tersedia',
                'foto' => '1762142255_f27371e1a7a02f556b36.jpeg'
            ],
            [
                'kode_buku' => 'BK002',
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'penerbit' => 'Hasta Mitra',
                'tahun_terbit' => 1980,
                'stok_total' => 5,
                'stok_tersedia' => 2,
                'rak_lokasi' => 'A2',
                'status' => 'dipinjam',
                'foto' => null
            ]
        ]);
    }
}
