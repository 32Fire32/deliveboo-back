<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 33; $i++) {
            $new_user = new User();
            $new_user->name = $faker->firstname() . '.' . $faker->lastName();
            $name = $new_user->name;
            $new_user->email =strtolower($name) . $faker->randomNumber(2, true) . '@' . $faker->freeEmailDomain;
            $new_user->password = Hash::make('password');
            $new_user->save();
    }
  }
}
