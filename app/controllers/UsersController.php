<?php

class UsersController extends \BaseController {

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
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		User::create($data);

		Log::info('User id: ' . $user->id . ' created.', array('newUser' => Input::get('username')));

		Session::flash('successMessage', 'Your account was created successfully! Please log in below:');

		return Redirect::route('users.index');
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

		$calendarEvents = $query->orderBy('updated_at')->get();

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
		} else {
			return Redirect::route('users.index');
		}
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

}
