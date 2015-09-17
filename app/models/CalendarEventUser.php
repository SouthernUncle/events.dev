<?php

class CalendarEventUser extends Eloquent {

	protected $table = 'calendar_event_user';

	/**
	 * Relationships
	 *
	 */
	public function users()
    {
	    return $this->belongsTo('User');
    }
}
