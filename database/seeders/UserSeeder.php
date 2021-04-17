<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email'=> $faker->email,
                'password' => Hash::make($faker->name),
                'grade' => rand(1,5)
            ]);
        }
    }
}
