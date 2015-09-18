<?php

use Carbon\Carbon as Carbon;

class CalendarEventsController extends BaseController {

	/**
	 * Display a listing of calendarEvents
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = CalendarEvent::with('location', 'user', 'eventusers')->where('start', '>', Carbon::now());

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

	public function past()
	{
		$query = CalendarEvent::with('location', 'user')->where('start', '<', Carbon::now());

		$pastEvents = $query->orderBy('start', 'desc')->get();

		return View::make('calendarEvents.past', compact('pastEvents'));
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
		$ce = CalendarEvent::find($id);
		
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

			$count = $ce->eventUsers()->count();	

			return View::make('calendarEvents.show', compact('ce', 'count'));
		}

		App::abort(404);
	}

	public function registerForEvent($id)
	{
		$u = User::find(Auth::id());
		$u->eventsAttending()->attach($id);

		Session::flash('successMessage', 'Event signup was sucessfull!');
		return Redirect::route('calendarEvents.show', $id);
	}

	public function unRegisterFromEvent($id)
	{
		$u = User::find(Auth::id());
		$u->eventsAttending()->detach($id);
		
		Session::flash('successMessage', 'You have declined your RSVP successfully.');
		return Redirect::route('calendarEvents.show', $id);
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
		$locations = Location::getQuery()->select('id', 'place')->get();
		$select = [];
		foreach($locations as $location) {
			$select[$location->id] = $location->place;
		}
		$locations = $select;
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
		$ce = CalendarEvent::find($id);

		if ($ce) {
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

		App::abort(404);
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

		Log::info('Event was deleted.');

		Session::flash('successMessage', 'Your event was successfully deleted.');

		return Redirect::route('calendarEvents.index');
	}
}
