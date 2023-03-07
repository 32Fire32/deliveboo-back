<?php

namespace Database\Seeders;

use App\Http\Controllers\Auth\NewPasswordController;
use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 22; $i++) {
            $newOrder = new Order();
            $newOrder->firstname = $faker->firstName();
            $newOrder->lastname = $faker->lastname();
            $newOrder->code = $faker->randomNumber(5, true);
            $newOrder->price = $faker->randomFloat(2, 0, 100);
            // $newOrder->slug = Str::slug($newOrder->code);
            $newOrder->address = $faker->Address();
            $name = $newOrder->firstname;
            $surname = $newOrder->lastname;
            $newOrder->email = strtolower($name . $surname) . '@' . $faker->safeEmailDomain;
            $newOrder->phone_number = $faker->phoneNumber();
            $newOrder->order_date = $faker->dateTimeBetween('-2 hours', 'Now');
            $newOrder->additional_info = $faker->sentence();
            if (mt_rand(1, 10) <= 3) {
                $newOrder->additional_info = null;
            }
            // $newOrder->orders()->attach(1,['quantity' => rand(1,5)]);


            $newOrder->save();
        }
    }
}
