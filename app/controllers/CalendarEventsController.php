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
		return View::make('calendarEvents.create');
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
			return Redirect::back()->withErrors($validator)->withInput();
		}

		CalendarEvent::create($data);

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
		$calendarEvent = CalendarEvent::findOrFail($id);

		return View::make('calendarEvents.show', compact('calendarEvent'));
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

		return View::make('calendarEvents.edit', compact('calendarEvent'));
	}

	/**
	 * Update the specified calendarEvent in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$calendarEvent = CalendarEvent::findOrFail($id);

		$validator = Validator::make($data = Input::all(), CalendarEvent::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$calendarEvent->update($data);

		return Redirect::route('calendarEvents.index');
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
