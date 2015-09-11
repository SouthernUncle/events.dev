@extends('layouts.master')

@section('title')
	Events Index
@stop

@section('style')

@stop

@section('heading')
	Awesome Events
@stop

@section('subheading')
	blah blah blah
@stop

@section('image_url')
	'/img/concerts1.jpg'
@stop

@section('content')
	<table>
		<thead>
			<tr>
				<th>Artist</th>
				<th>Venue</th>
				<th>Start</th>
				<th>End</th>
				<th>City</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($calendarEvents as $ce)
			<tr>
				<td>
					<a href="{{{ action('CalendarEventsController@show', $ce->id) }}}">
						{{ $ce->title }}
					</a>
				</td>
				<td>{{ $ce->location->place }}</td>
				<td>{{ $ce->start }}</td>
				<td>{{ $ce->end }}</td>
				<td>{{ $ce->location->city }} {{ $ce->location->state }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop

@section('js')

@stop
