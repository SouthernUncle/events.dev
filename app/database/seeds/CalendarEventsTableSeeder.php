<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			CalendarEvent::create([
				'title' => $faker->catchPhrase,
				'description' => $faker->bs,
				'start' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week'),
				'end' => $faker->dateTimeBetween($startDate = '+1 week', $endDate = '+2 weeks'),
				'price' => $faker->numberBetween(10,200),
			]);
		}
	}

}