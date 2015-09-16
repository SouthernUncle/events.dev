<?php


class CalendarEventUserTableSeeder extends Seeder {

	public function run()
	{

		foreach(range(1, 10) as $index)
		{
			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 1;
			$ceu->save();

			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 2;
			$ceu->save();
		}

		foreach(range(11, 20) as $index)
		{
			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 3;
			$ceu->save();

			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 4;
			$ceu->save();
		}

		foreach(range(21, 28) as $index)
		{
			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 1;
			$ceu->save();

			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 4;
			$ceu->save();
		}

		foreach(range(29, 33) as $index)
		{
			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 3;
			$ceu->save();

			$ceu = new CalendarEventUser();
			$ceu->calendar_event_id  = $index;
			$ceu->user_id  = 2;
			$ceu->save();
		}
	}

}