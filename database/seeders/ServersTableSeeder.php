<?php

namespace Database\Seeders;

use App\Models\Server;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Server::create([
                'name' => $faker->city,
                'ip' => '1.2.3.'.$i,
                'port' => '27015',
                'rcon_pw' => '12345',
                'server_group_id' => ($i % 2) + 1
            ]);
        }
        //
    }
}
