<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

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

	public function locations()
	{
	    return $this->hasMany('Location');
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
	public static $rules = array(
		'email' 		  => 'required|email|max:255|unique:users',
		'first_name' 	  => 'required|max:255|min:2',
		'last_name'  	  => 'required|max:255|min:2',
		'username'   	  => 'required|max:32|min:4',
		'password'  	  => 'required|confirmed|min:8'
	);

	public static $editRules = array(
	    'email' 	   	  => 'required|email|max:255',
		'first_name' 	  => 'required|max:255|min:2',
		'last_name'  	  => 'required|max:255|min:2',
		'username'   	  => 'required|max:32|min:4',
		'password'  	  => 'required',
		'newPass'		  => 'max:32|min:8',
		'newPassConfirm'  => 'max:32|min:8'
	);

	/**
	 * Password hashing
	 *
	 */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

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
