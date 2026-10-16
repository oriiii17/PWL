<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
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
            'kodeMk' => fake()->unique()->numerify('######'), // Generate a unique 6-digit number
            'namaMk' => fake()->sentence(60), // Generate a random sentence with 60 words
            'sks' => fake()->numberBetween(1, 4) // Generate a random number between 1 and 4 for SKS
            //
        ];
    }
}
