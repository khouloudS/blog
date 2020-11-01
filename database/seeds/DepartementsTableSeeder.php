<?php

use App\departement;
use Illuminate\Database\Seeder;

use App\User;

class DepartementsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 3; $i++) {
            $user = new departement;
            $user->name = $faker->unique()->name;
            $user->domain = $faker->domainName;
            $user->save();
        }
    }
}
