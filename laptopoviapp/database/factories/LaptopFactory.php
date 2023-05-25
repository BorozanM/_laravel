<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'naziv' => $this->faker->randomElement($array=array('asus','lenovo','dell','macbook pro','macbook air')),
        'ekran' => $this->faker->randomElement($array=array('13.3','14','15','16','17')),
        'baterija' => $this->faker->randomElement($array=array('5000','6000')),
        'os' => $this->faker->randomElement($array=array('Windows','Linux','mac')),
        'boja' => $this->faker->randomElement($array=array('crna','siva','plava','crvena')),
        'cena' => $this->faker->numberBetween($min=100000,$max=250000),


        ];
    }
}
