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
				<th>Zip</th>
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
				<td>
					{{{ $l->city }}}, {{{ $l->state }}}
				</td>
				<td>
					{{{ $l->zip }}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<h3>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			Upcoming Events
		</a>
	</h3>

	@if(Auth::id() == 1)
		<a href="{{{ action('LocationsController@create') }}}">
			<button class="btn btn-default">
				Create Venue
			</button>
		</a>	
	@endif
@stop
