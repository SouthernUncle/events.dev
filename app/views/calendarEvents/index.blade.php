@extends('layouts.master')

@section('title', 'Events Index')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/calendar_events_index.css">
@stop

@section('heading', 'LIVE')

@section('subheading', 'Awesome Music in San Antonio, TX')

@section('image_url', '/img/concerts1.jpg')

@section('content')
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Artist</th>
				<th>Venue</th>
				<th>Date</th>
				<th>Time</th>

			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			@foreach ($calendarEvents as $ce)
			<tr>
				<td>{{{ $i+=1 }}}</td>
				<td>
					<a href="{{{ action('CalendarEventsController@show', $ce->id) }}}">
						{{{ $ce->title }}}
					</a>
				</td>
				<td>
					<a href="{{{ action('LocationsController@show', $ce->location->id) }}}">
						{{{ $ce->location->place }}}
					</a>
				</td>
				<td>{{{ CalendarEvent::formatDate($ce->start)->format('D. M. jS, Y') }}}</td>
				<td>{{{ CalendarEvent::formatDate($ce->start)->format('g A') }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<h4>
		<a href="{{{ action('CalendarEventsController@past') }}}">
			Past Events
		</a>
	</h4>
@stop
