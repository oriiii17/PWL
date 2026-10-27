<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    protected $locale = 'id_ID'; // Set the locale to Indonesian
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' =>fake()->unique()->numerify('########'), 
            'nama' => fake()->name(),
            'kota' => fake()->city()
            //
        ];
    }
}
