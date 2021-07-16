<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++) {
            Order::create([
                'type' => rand(0, 1) ? 'electrodomésticos' : 'cosméticos',
                'date' => $faker->dateTimeBetween('now -60 days', 'now'),
                'note' => $faker->text
            ]);
        }
    }
}
