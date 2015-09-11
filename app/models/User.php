<?php

use \Esensi\Model\Model;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Model implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Relationships
	 *
	 */
	public function calendarEvents()
	{
	    return $this->hasMany('CalendarEvent');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Rules
	 *
	 * @var array
	 */
	protected $rules = array(
		'email' => 'required|email|max:255|unique:users',
		'first_name' => 'required|max:255|min:2',
		'last_name' => 'required|max:255|min:2',
		'password' => 'required|confirmed|min:8',
		'username' => 'required|max:32|min:4'
	);

	/**
	 * Password hashing
	 *
	 * @var array
	 */
	protected $hashable = [ 'password' ];

	/**
	 * Username standard as lowercase for comparison
	 *
	 * @var string
	 */
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}
}
