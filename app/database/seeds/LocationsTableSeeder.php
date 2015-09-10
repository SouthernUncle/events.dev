<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Location::create([

				'place' => $faker->company,
				'address' => $faker->streetAddress,
				'city' => $faker->city,
				'state' => $faker->stateAbbr,
				'zip' => $faker->numberBetween($min = 12345, $max = 96543),
			]);
		}
	}

}