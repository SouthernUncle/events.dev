@extends('layouts.master')

@section('title', 'Concert Lister')

@section('heading', 'List of Users')

@section('subheading', '...')

@section('image_url', '/img/concerts2.jpg')

@section('content')
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Join Date</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($users as $u)
			<tr>
				<td>{{{ $u->first_name }}} {{{ $u->last_name }}}</td>
				<td>
					<a href="{{{ action('UsersController@show', $u->id) }}}">
						{{{ $u->username }}}
					</a>
				</td>
				<td>{{{ $u->email }}}</td>
				<td>{{{ $u->created_at->setTimezone('America/Chicago')->format('M. jS, Y') }}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<h3>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			Upcoming Events
		</a>
	</h3>

	@if(!Auth::check())
		<a href="{{{ action('UsersController@create') }}}">
			<button class="btn btn-default">
				Register
			</button>
		</a>	
	@endif
@stop
