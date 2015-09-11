<?php

use \Esensi\Model\Model;

class Location extends Model {

	// Don't forget to fill this array
	protected $fillable = [];

	protected $table = 'locations';

	/**
	 * Relationships
	 *
	 */
	public function calendarEvents()
	{
	    return $this->hasMany('CalendarEvent');
	}

	/**
	 * Rules
	 *
	 */
	protected $rules = array(
		'place' => 'required',
		'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip' => 'required',
	);

}