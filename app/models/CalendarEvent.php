<?php

use \Esensi\Model\Model;

class CalendarEvent extends Model {
	protected $fillable = [];

	protected $table = 'calendar_events';

	protected $rules = array(
		'title' => 'required',
		'description' => 'required',
		'start' => 'required',
		'end' => 'required',
		'price' => 'required',
	);
}