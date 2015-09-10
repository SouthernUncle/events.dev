<?php

use \Esensi\Model\Model;

class CalendarEvent extends Model {
	protected $fillable = [];

	protected $table = 'calendar_events';

	protected $rules = array(
		'title' => 'required|max:32',
		'description' => 'required|max:255|min:20',
		'start' => 'required',
		'end' => 'required',
		'price' => 'required|max:200|min:10',
	);
}