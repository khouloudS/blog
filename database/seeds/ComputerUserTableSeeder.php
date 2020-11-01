<?php

use App\computer;
use App\computerUser;
use Illuminate\Database\Seeder;

use App\User;

class ComputerUserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 30; $i++) {
            $user = new computerUser;

            $users1 = App\User::pluck('id')->toArray();
            $users2 = App\computer::pluck('id')->toArray();

            $user->user_id = $faker->randomElement($users1);
            $user->computer_id = $faker->randomElement($users2);

            $user->save();
        }
    }
}
