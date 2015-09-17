<?php

use Carbon\Carbon as Carbon;

class CalendarEvent extends Eloquent {

	protected $fillable = [];

	protected $table = 'calendar_events';

	/**
	 * Relationships
	 *
	 */
	public function user()
	{
	    return $this->belongsTo('User');
	}

	public function location()
	{
	    return $this->belongsTo('Location');
	}

	public function eventUsers()
    {
	    return $this->belongsToMany('User', 'calendar_event_user', 'calendar_event_id', 'user_id')->withTimestamps();
    }


	/**
	 * Date Format
	 *
	 */
	public static function formatDate($date)
	{
		$newDate = Carbon::createFromFormat('Y-m-d H:i:s', $date);

		return $newDate;
	}

	/**
	 * Rules
	 *
	 */
	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'start' => 'required',
		'price' => 'required',
	);
}