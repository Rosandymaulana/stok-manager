<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {

            DB::table('products')->insert([
                'product_ID' => $faker->randomNumber(5, true),
                'product_name' => $faker->word,
                'buy_rate' => $faker->numberBetween($min = 1500, $max = 100000),
                'type' => $faker->numberBetween(1, 10),
                'initial_quantity' => $faker->numberBetween(0, 150),
                'description' => $faker->paragraph(),
                'created_at' => new DateTime(now()),
                'updated_at' => new DateTime(now())
            ]);
        }
    }
}
