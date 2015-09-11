@extends('layouts.master')

@section('title')
	Events Index
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/calendar_events_index.css">
@stop

@section('heading')
	LIVE
@stop

@section('subheading')
	Awesome Music in Awesome Venues
@stop

@section('image_url')
	'/img/concerts1.jpg'
@stop

@section('content')
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Artist</th>
				<th>Venue</th>
				<th>Start</th>
				<th>City</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($calendarEvents as $ce)
			<tr>
				<td>
					<a href="{{{ action('CalendarEventsController@show', $ce->id) }}}">
						{{{ $ce->title }}}
					</a>
				</td>
				<td>{{{ $ce->location->place }}}</td>
				<td>{{{ CalendarEvent::formatDate($ce->start)->format('D. M. jS, Y') }}}</td>
				<td>{{{ $ce->location->city }}}, {{{ $ce->location->state }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop

@section('js')

@stop
