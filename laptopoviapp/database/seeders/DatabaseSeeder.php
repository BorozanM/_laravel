<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Laptop;
use App\Models\Racun;
use App\Models\StavkaRacuna;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        StavkaRacuna::truncate();
        Racun::truncate();
        Laptop::truncate();
        User::factory(10)->create();

        $ts = new LaptopSeeder();
        $ts->run();

        $rs = new RacunSeeder();
        $rs ->run();


        $srs = new StavkaRacunaSeeder();
        $srs ->run();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
