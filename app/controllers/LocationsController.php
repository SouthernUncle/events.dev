<?php

class LocationsController extends BaseController {

	/**
	 * Display a listing of locations
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = Location::orderBy('state')->orderBy('city')->orderBy('place')->get();

		return View::make('locations.index', compact('locations'));
	}

	/**
	 * Show the form for creating a new location
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('locations.create');
	}

	/**
	 * Store a newly created location in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Location::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
			Log::info('Venue create failed');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$location = new Location();
		$location->place 	= Input::get('place');
		$location->address  = Input::get('address');
		$location->city 	= Input::get('city');
		$location->state 	= Input::get('state');
		$location->zip 	 	= Input::get('zip');
		$location->user_id	= Auth::id();

		$location->save();

		return Redirect::route('locations.index');
	}

	/**
	 * Display the specified location.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$location 		  = Location::findOrFail($id);
		$query 	  		  = CalendarEvent::with('location');
		$calendarEvents	  = $query->where('location_id', $location->id)->orderBy('start')->get();

		$qstring = $location->place . ' ' . $location->city . ' ' . $location->state;
		$qstring = implode('%20', explode(' ', $qstring));
		// dd($qstring);

		return View::make('locations.show', compact('location', 'calendarEvents', 'qstring'));
	}

	/**
	 * Show the form for editing the specified location.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::id() == 1) {

			$location = Location::find($id);
			return View::make('locations.edit', compact('location'));
		} else {

			Session::flash('errorMessage', 'You are not authorized to access that page.');
			return Redirect::route('locations.index');
		}
	}

	/**
	 * Update the specified location in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$location = Location::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Location::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Hmm...something went wrong. Please check the error messages below.');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$location->place = Input::get('place');
		$location->address = Input::get('address');
		$location->city = Input::get('city');
		$location->state = Input::get('state');
		$location->zip = Input::get('zip');
		$location->save();

		Log::info('Location ' . $location->id . ' successfully updated.');

		Session::flash('successMessage', 'Location successfully updated.');

		return Redirect::action('LocationsController@show', $location->id);
	}

	/**
	 * Remove the specified location from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Location::destroy($id);

		return Redirect::route('locations.index');
	}

}
