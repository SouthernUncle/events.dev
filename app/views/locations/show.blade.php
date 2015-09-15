@extends('layouts.master')

@section('title', 'Concert Lister - Venues')

@section('heading')
	{{{ $location->place }}}
@stop

@section('subheading')
	{{{ $location->city }}}, {{{ $location->state }}}
@stop

@section('image_url', '/img/concerts4.jpg')

@section('content')
	<h1>{{{ $location->place }}}</h1>
	<h3>{{{ $location->address }}}</h3>
	<h3>{{{ $location->city }}}, {{{ $location->state }}}</h3>
	<h4>{{{ $location->zip }}}</h4>

	<div id="map">Map will go here</div>

	<h2>Upcoming Shows</h2>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Artist</th>
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
				<td>{{{ CalendarEvent::formatDate($ce->start)->format('D. M. jS, Y') }}}</td>
				<td>{{{ CalendarEvent::formatDate($ce->start)->format('g A') }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<h4>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			All Upcoming Events
		</a>
	</h4>
@stop