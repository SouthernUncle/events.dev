<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarEventUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendar_event_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('calendar_event_id')->unsigned()->index();
			$table->foreign('calendar_event_id')->references('id')->on('calendar_events')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('calendar_event_user', function(Blueprint $table) {
			$table->dropForeign('calendar_event_user_calendar_event_id_foreign');
			$table->dropForeign('calendar_event_user_user_id_foreign');
		});

		Schema::drop('calendar_event_user');
	}

}
