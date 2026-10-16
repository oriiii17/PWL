<?php

namespace Database\Factories;

use App\Models\Krskhs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Krskhs>
 */
class KrskhsFactory extends Factory
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
            'idKrs' => $this->faker->unique()->randomNumber(),
            'noReg' => $this->faker->randomNumber(),
            'jadwalID' => $this->faker->randomNumber(),
            'nilai' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E'])
            //
        ];
    }
}
