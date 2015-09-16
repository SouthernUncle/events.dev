<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('calendar_events')->delete();
		DB::table('locations')->delete();
		DB::table('users')->delete();
		DB::table('calendar_event_user')->delete();


		$this->call('UsersTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('CalendarEventsTableSeeder');
		$this->call('CalendarEventUserTableSeeder');
	}

}
