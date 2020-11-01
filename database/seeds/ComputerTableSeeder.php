<?php

use App\computer;
use App\departement;
use Illuminate\Database\Seeder;

use App\User;

class ComputerTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $user = new computer;
            $user->macAdress = $faker->unique()->macAddress;
            $user->model = $faker->name;
            $user-> system= $faker->name;
            $user-> purchase= $faker->dateTimeThisCentury->format('Y-m-d');


            $users = App\Departement::pluck('id')->toArray();

            $user->departement_id = $faker->randomElement($users);

            $user->save();
        }
    }
}
