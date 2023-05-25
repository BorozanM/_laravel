<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Racun>
 */
class RacunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null) ,
            'adresaLokala' => $this->faker->address()

        ];
    }
}
