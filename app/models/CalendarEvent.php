<?php

use \Esensi\Model\Model;

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

	/**
	 * Rules
	 *
	 */
	protected $rules = array(
		'title' => 'required',
		'description' => 'required',
		'start' => 'required',
		'end' => 'required',
		'price' => 'required',
	);
}