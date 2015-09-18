<?php

class UsersController extends BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));	
	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) {
			Session::flash('errorMessage', 'Please log out before creating a new account.');
			return Redirect::action('HomeController@showHome');
		}

		return View::make('users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
	    $validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails()) {
			Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
			Log::info('User create failed');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	        
        // validation succeeded, create and save the user
		$user = new User();
		$user->first_name = Input::get('first_name');
		$user->last_name  = Input::get('last_name');
		$user->email      = Input::get('email');
		$user->username   = Input::get('username');
		$user->password   = Input::get('password');
		// $user->password_confirmation = Input::get('password_confirmation');
		$user->save();

		Log::info('User id: ' . $user->id . ' created.', array('newUser' => Input::get('username')));

		Session::flash('successMessage', 'Your account was created successfully! Please log in below:');

		return Redirect::action('HomeController@showLogin');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		$query = CalendarEvent::with('user');
		$query->where('user_id', $user->id);

		$calendarEvents = $query->orderBy('start')->get();

		return View::make('users.show', compact('user', 'calendarEvents'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		if(Auth::id() != $user->id) {
			Session::flash('errorMessage', 'You are not authorized to edit this user.');
			Log::warning('User ' . Auth::id() . ' tried to edit user ' . $user->id .  ' without authorization.');
			return Redirect::action('UsersController@index');
		}

		if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			return App::abort(404);	
		}

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);
		$password = Input::get('password');
		$validator = Validator::make(Input::all(), User::$editRules);

		if ($validator->fails()) {
	        Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			App::abort(404);
		} else if ((Auth::attempt(array('password' => $password)))) {
			Session::flash('errorMessage', 'Your password was incorrect.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else if ((Input::has('newPass') || Input::has('newPassConfirm')) && (Input::get('newPass') != Input::get('newPassConfirm'))) {
			Session::flash('errorMessage', 'Your passwords did not match');
			return Redirect::back()->withInput()->withErrors($validator);
		}
 
		// updates the edited user
		$user->first_name = Input::get('first_name');
		$user->last_name  = Input::get('last_name');
		$user->username   = Input::get('username');
		$user->email      = Input::get('email');

		if (Input::has('newPass')) {
			$user->password = Input::get('newPass');
			Session::flash('successMessage', 'Your password was updated.');
		}

		$user->save();

		Log::info('User ' . $user->id . ' updated successfully.');

		Session::flash('successMessage', 'Your account was updated successfully!');

		return Redirect::route('users.show', $user->id);
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete user's events
		CalendarEvent::where('user_id', $id)->delete();

		// delete user account
		$user = User::find($id)->delete();

		Auth::logout();

		if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			App::abort(404);
		}

		Log::info('User was deleted.');

		Session::flash('successMessage', 'Your account and posts were successfully deleted.');


		return Redirect::action('CalendarEventsController@index');
	}

}
