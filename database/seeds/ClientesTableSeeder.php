<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Cliente::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Clientes in our database:
        for ($i = 0; $i < 50; $i++) {
            Cliente::create([
                'name' => $faker->name,
                'last_name_1' => $faker->name,
                'last_name_2' => $faker->name,
                'email' => $faker->email,
            ]);
        }
    }
}
