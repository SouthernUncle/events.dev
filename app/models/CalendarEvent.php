<?php

use \Esensi\Model\Model;
use Carbon\Carbon as Carbon;

class CalendarEvent extends Model {

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

	public static function formatDate($date)
	{
		$newDate = Carbon::createFromFormat('Y-m-d H:i:s', $date);

		return $newDate;

	}

	/**
	 * Rules
	 *
	 */
	protected $rules = array(
		'title' => 'required',
		'description' => 'required',
		'start' => 'required',
		'price' => 'required',
	);
}