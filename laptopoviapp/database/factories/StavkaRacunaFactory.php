<?php

namespace Database\Factories;

use App\Models\Laptop;
use App\Models\Racun;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StavkaRacuna>
 */
class StavkaRacunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'laptop' => $this->faker->numberBetween( 1,Laptop::count()),
            'racun' => $this->faker->numberBetween( 1,Racun::count()),

            'kolicina' => $this->faker->numberBetween($min=1,$max=10),

        ];
    }
}
