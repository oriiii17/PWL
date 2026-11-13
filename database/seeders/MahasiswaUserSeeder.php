<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mahasiswa; // Pastikan Model Mahasiswa sudah di-import
use Illuminate\Support\Facades\Hash;

class MahasiswaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            ['10101010', 'Asep'],
            ['10101011', 'Siti']
        ];

        foreach ($mahasiswas as $mhs) {
            // 1. Masukkan data ke tabel mahasiswas terlebih dahulu agar relasi terpenuhi
            Mahasiswa::updateOrCreate(
                ['nim' => $mhs[0]],
                ['nama' => $mhs[1]] // Sesuaikan nama kolom jika di tabel mahasiswas menggunakan 'nama' atau 'name'
            );

            // 2. Setelah data di mahasiswas ada, baru masukkan ke tabel users
            User::updateOrCreate(
                ['nim' => $mhs[0]],
                [
                    'name' => $mhs[1],
                    'email' => $mhs[0] . '@mail.com',
                    'password' => Hash::make($mhs[0]),
                    'role' => 'mahasiswa'
                ]
            );
        }
    }
}