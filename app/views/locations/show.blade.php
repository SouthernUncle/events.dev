@extends('layouts.master')

@section('title', 'Concert Lister - Venues')

@section('heading')
	{{{ $location->place }}}
@stop

@section('subheading')
	{{{ $location->city }}}, {{{ $location->state }}}
@stop

@section('image_url')
'{{{ $location->img_url }}}'
@stop

@section('content')
	<h1>{{{ $location->place }}}</h1>
	<h3>{{{ $location->address }}}</h3>
	<h3>{{{ $location->city }}}, {{{ $location->state }}}</h3>
	<h4>{{{ $location->zip }}}</h4>

	<div id="map">
		{{-- <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q={{ $qstring }}&key=AIzaSyCYjMX8DWrfrj1tQT7e4Ev92nvYOaf13os" allowfullscreen></iframe> --}}
		<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/search?q={{ $qstring }}&key=AIzaSyBJc2eSTR9h3VhnnIMaFIqpn3jC3UmzvZ8" allowfullscreen></iframe>
	</div>

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

	<h3>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			All Events
		</a>
	</h3>

	@if(Auth::id() == 1)
		<a href="{{{ action('LocationsController@edit', $location->id) }}}">
			<button class="btn btn-default">
				Edit >>
			</button>
		</a>	
	@endif
@stop