<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Carbon\Carbon as Carbon;

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			CalendarEvent::create([
				'title' => $faker->firstName . ' ' . $faker->lastName,
				'description' => $faker->realText($maxNbChars = 500),
				'start' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+3 months'),
				'price' => $faker->numberBetween(10,200),
				'user_id' => $faker->numberBetween($min = 1, $max = 4),
				'location_id' => $faker->numberBetween($min = 1, $max = 20)
			]);
		}
	}

}