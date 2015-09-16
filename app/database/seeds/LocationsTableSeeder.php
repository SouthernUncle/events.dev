<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Paper Tiger';
		$location->address = '2410 N St Mary\'s St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78212';
		$location->img_url = 'papertiger.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Korova';
		$location->address = '107 E Martin St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78205';
		$location->img_url = 'korova.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Majestic Theatre';
		$location->address = '224 E Houston St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78205';
		$location->img_url = 'majestic.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'The Aztec Theatre';
		$location->address = '201 E Commerce St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78205';
		$location->img_url = 'aztec.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'The Ten Eleven';
		$location->address = '1011 Avenue B';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78215';
		$location->img_url = 'teneleven.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Alamo City Music Hall';
		$location->address = '1305 E Houston St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78202';
		$location->img_url = 'alamocity.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Sam\'s Burger Joint';
		$location->address = '330 E Grayson St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78215';
		$location->img_url = 'sams.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Tobin Center';
		$location->address = '100 Auditorium Cir';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78205';
		$location->img_url = 'tobin.jpg';
		$location->save();

		$location = new Location();
		$location->user_id = 1;
		$location->place = 'Tycoon Flats';
		$location->address = '2926 N St Mary\'s St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78212';
		$location->img_url = 'tycoonflats.jpg';
		$location->save();
	}

}