<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Anisa F',
                'username' => 'anisa',
                'password' => Hash::make('12345'),
                'email' => 'anisa@gmail.com',
                'role' => 'siswa',
                'foto' => 'default.png',
                'created_at' => now()
            ],
            [
                'fullname' => 'Nurul A',
                'username' => 'nurul',
                'password' => Hash::make('12345'),
                'email' => 'nurul@gmail.com',
                'role' => 'guru',
                'foto' => 'default.png',
                'created_at' => now()
            ],
            [
                'fullname' => 'petugas Perpus',
                'username' => 'petugas',
                'password' => Hash::make('12345'),
                'email' => 'petugas@perpus.com',
                'role' => 'petugas',
                'foto' => 'default.png',
                'created_at' => now()
            ],
            [
                'fullname' => 'Admin Perpus',
                'username' => 'admin',
                'password' => Hash::make('12345'),
                'email' => 'admin@perpus.com',
                'role' => 'admin',
                'foto' => 'default.png',
                'created_at' => now()
            ]
        ]);
    }
}
