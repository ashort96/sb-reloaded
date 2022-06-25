<?php

namespace Database\Seeders;

use App\Models\Ban;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ban::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Ban::create([
                'ip' => $faker->ipv4,
                'name' => $faker->name,
                'steam_id' => 'STEAM_0:0:0',
                'reason' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'length' => $faker->numberBetween($min = 1000, $max = 9000),
                'admin_id' => ($i % 2) + 1
            ]);
        }
        //
    }
}
