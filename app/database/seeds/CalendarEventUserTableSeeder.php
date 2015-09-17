<?php


class CalendarEventUserTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			$u = User::find(1);
			$u->eventsAttending()->attach($index);

			$u = User::find(2);
			$u->eventsAttending()->attach($index);
		}

		foreach(range(11, 20) as $index)
		{
			$u = User::find(3);
			$u->eventsAttending()->attach($index);

			$u = User::find(4);
			$u->eventsAttending()->attach($index);
		}

		foreach(range(21, 28) as $index)
		{
			$u = User::find(1);
			$u->eventsAttending()->attach($index);

			$u = User::find(4);
			$u->eventsAttending()->attach($index);
		}

		foreach(range(29, 33) as $index)
		{
			$u = User::find(3);
			$u->eventsAttending()->attach($index);

			$u = User::find(2);
			$u->eventsAttending()->attach($index);
		}
	}

}