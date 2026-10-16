<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jadwal>
 */
class JadwalFactory extends Factory
{
     protected $locale = 'id_ID';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jadwalID' => fake()->unique()->numerify('#######'), // Generate a unique 7-digit number
            'hari' => fake()->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']),
            'waktu' => fake()->randomElement(['07:00-10.20','10:30-13.50', '14:00-17.20']),
            'kodeMk' => fake()->numerify('######'), // Generate a unique 6-digit number
            'grup' => fake()->randomElement(['A', 'B', 'C']),
            'nik' => fake()->numerify('#######'), // Generate a unique 7-digit number
            'ruang' => fake()->randomElement(['Ruang A','Ruang B', 'Ruang C', 'Ruang D'])
            //
        ];
    }
}
