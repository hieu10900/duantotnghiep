<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        for ($i = 0; $i < 5; $i++){
            $data = [
                'first_name' => $faker->name,
                'middle_name' => $faker->name,
                'last_name' => $faker->name,
                'avatar' => $faker->image('public/images', 400, 300, null, false),
                'username' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('matkhau'),
                'address' => $faker->address,
            ];
            DB::table('users')->insert($data);
        }
    }
}
