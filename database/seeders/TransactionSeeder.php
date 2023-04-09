<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
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

            DB::table('transactions')->insert([
                'id' => $faker->numberBetween(1, 10),
                'product_ID' => $faker->numberBetween(1, 10),
                'type' => $faker->randomElement(['IN', 'OUT']),
                'date' => new DateTime(now())
            ]);
        }
    }
}
