@extends('layouts.master')

@section('title', 'Concert Lister - Venues')

@section('heading', 'Venues')

@section('subheading', 'Where the Music Happens')

@section('image_url', '/img/concerts4.jpg')

@section('content')
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Venue</th>
				<th>Location</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($locations as $l)
			<tr>
				<td>
					<a href="{{{ action('LocationsController@show', $l->id) }}}">
						{{{ $l->place }}}
					</a>
				</td>
				<td>
					{{{ $l->address }}}
				</td>
				<td>{{{ $l->city }}}, {{{ $l->state }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<h4>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			Upcoming Events
		</a>
	</h4>
@stop
