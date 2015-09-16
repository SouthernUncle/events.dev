<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([

			'username'   => $_ENV['USER_USERNAME'],
			'first_name' => $_ENV['USER_FIRSTNAME'],
			'last_name'  => $_ENV['USER_LASTNAME'],
			'email'      => $_ENV['USER_EMAIL'],
			'password'   => $_ENV['USER_PASSWORD'],
		]);

		$faker = Faker::create('en_EN');

		foreach(range(1, 3) as $index)
		{
			User::create([
				
				'username'   => $faker->userName,
				'first_name' => $faker->firstName,
				'last_name'  => $faker->lastName,
				'email'      => $faker->freeEmail,
				'password'   => $_ENV['USER_PASSWORD'],
			]);
		}
	}

}