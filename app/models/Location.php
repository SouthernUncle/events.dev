<?php


class Location extends Eloquent {

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

	public function users()
	{
	    return $this->belongsTo('User');
	}

	/**
	 * Rules
	 *
	 */
	public static $rules = array(
		'place' => 'required',
		'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip' => 'required',
	);

}