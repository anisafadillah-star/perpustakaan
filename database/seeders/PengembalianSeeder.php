<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pengembalian')->insert([
            [
                'id_peminjaman' => 2,
                'tgl_kembali'   => '2025-09-26',
                'denda'         => 0,
            ],
            [
                'id_peminjaman' => 1,
                'tgl_kembali'   => '2025-10-10',
                'denda'         => 5000,
            ],
        ]);
    }
}
