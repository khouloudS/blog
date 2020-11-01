<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $user = new User;
            $user->name = $faker->lastName;
            $user->email = $faker->unique()->email;
            $user->password = bcrypt('123456');
            $user->save();
        }
    }
}
