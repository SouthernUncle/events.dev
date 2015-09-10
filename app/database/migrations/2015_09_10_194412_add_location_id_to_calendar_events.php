<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLocationIdToCalendarEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('calendar_events', function(Blueprint $table)
		{
			$table->integer('location_id')->unsigned()->index();
			$table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');	

			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');	
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('calendar_events', function(Blueprint $table)
		{
			$table->dropColumn('location_id');	
			$table->dropColumn('user_id');
		});
	}

}
