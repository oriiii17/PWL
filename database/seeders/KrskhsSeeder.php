<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KrskhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Mahasiswa::factory(10)->create();
        \App\Models\Matakuliah::factory(10)->create();
        \App\Models\Registrasi::factory(10)->create();   
    //
    }
}
