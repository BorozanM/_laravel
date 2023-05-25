<?php

namespace Database\Factories;

use App\Models\Racun;
use App\Models\Laptop;
use Illuminate\Database\Eloquent\Factories\Factory;

class StavkaRacunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'laptop' => $this->faker->numberBetween( 1,Laptop::count()),
            'racun' => $this->faker->numberBetween( 1,Racun::count()),

            'kolicina' => $this->faker->numberBetween($min=1,$max=10),


        ];
    }
}
