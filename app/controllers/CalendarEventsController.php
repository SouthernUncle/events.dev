<?php

class CalendarEventsController extends \BaseController {

	/**
	 * Display a listing of calendarEvents
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = CalendarEvent::with('location', 'user');

		$search = Input::get('search');

		if($search) {
			$query->where('title', 'like', "%$search%");
			$query->orWhere('description', 'like', "%$search%");
			$query->orWhere('start', 'like', "%$search%");
			$query->orWhereHas('location', function($q) use ($search) {
				$q->where('city', 'like', "%$search%");
			});
			$query->orWhereHas('location', function($q) use ($search) {
				$q->where('place', 'like', "%$search%");
			});
			$query->orWhereHas('user', function($q) use ($search) {
				$q->where('username', 'like', "%$search%");
			});
		}

		$calendarEvents = $query->orderBy('start')->get();

		return View::make('calendarEvents.index', compact('calendarEvents'));
	}

	/**
	 * Show the form for creating a new calendarEvent
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations = Location::all();
		return View::make('calendarEvents.create', compact('locations'));
	}

	/**
	 * Store a newly created calendarEvent in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), CalendarEvent::$rules);

		if ($validator->fails())
		{
	    	Session::flash('errorMessage', 'Something went wrong.');

			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ce = new CalendarEvent();

		$title = Input::get('title');
		$description = Input::get('description');
		$price = Input::get('price');
		$start = Input::get('start');
		$location = Input::get('location');

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
 			$ce->img_url = $img['filename'];
		}
		
		$ce->title = $title;
		$ce->description = $description;
		$ce->price = $price;
		$ce->start = $start;
		$ce->location_id = $location;
		$ce->user_id = Auth::id();

		$ce->save();


		Log::info('Success: ' ,['title' => $ce->title, 'description' => $ce->body]);

		Session::flash('successMessage', 'You created a post successfully');

		return Redirect::route('calendarEvents.index');
	}

	/**
	 * Display the specified calendarEvent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ce = CalendarEvent::findOrFail($id);

		if ($ce) {

			$description = $ce->description;
			$parse = new Parsedown();

			$ce->description = $parse->text($description);

			if (is_null($ce->img_url)) {
				$ce->img_url = "/img/concerts3.jpg";
			} else {
				$basename = $ce->img_url;
				$ce->img_url = "/uploads/images/$basename";
			}

			return View::make('calendarEvents.show', compact('ce'));
		}

		App::abort(404);
	}

	/**
	 * Show the form for editing the specified calendarEvent.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calendarEvent = CalendarEvent::find($id);
		$locations = Location::all();

		return View::make('calendarEvents.edit', compact('calendarEvent', 'locations'));
	}

	/**
	 * Update the specified calendarEvent in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ce = CalendarEvent::findOrFail($id);

		$validator = Validator::make($data = Input::all(), CalendarEvent::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ce->title = Input::get('title');
		$ce->description = Input::get('description');
		$ce->price = Input::get('price');
		$ce->start = Input::get('start');
		$ce->location_id = Input::get('location');
		$ce->user_id = Auth::id();

		$ce->save();

		Session::flash('successMessage', 'You edited this event successfully');

		return Redirect::action('CalendarEventsController@show', $ce->id);
	}

	/**
	 * Remove the specified calendarEvent from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		CalendarEvent::destroy($id);

		return Redirect::route('calendarEvents.index');
	}

}
