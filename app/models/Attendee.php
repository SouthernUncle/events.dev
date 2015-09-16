<?php

class Attendee extends Eloquent {

	protected $table = 'calendar_event_user';

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
