<?php

class EventUser extends Eloquent {

	protected $table = 'event_users';

	/**
	 * Relationships
	 *
	 */
	public function calendarEvents()
	{
	    return $this->belongsTo('CalendarEvent');
	}

	public function users()
    {
	    return $this->belongsTo('User');
    }
}
