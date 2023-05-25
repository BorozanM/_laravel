<?php

namespace Database\Seeders;

use App\Models\StavkaRacuna;
use Illuminate\Database\Seeder;

class StavkaRacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StavkaRacuna::factory(10)->create();
    }
}
