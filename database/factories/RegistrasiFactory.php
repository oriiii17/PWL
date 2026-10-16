<?php

namespace Database\Factories;

use App\Models\Registrasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Registrasi>
 */
class RegistrasiFactory extends Factory
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
            'noReg' => $this->faker->unique()->randomNumber(),
            'tanggal' => $this->faker->date(),
            'nim' => $this->faker->numerify('########') // Generate a unique 8-digit number_format   

            //
        ];
    }
}
