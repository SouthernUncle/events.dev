@extends('layouts.master')

@section('title', 'Concert Lister')

@section('heading')
	{{{ $user->username }}}
@stop

@section('subheading')
	{{{ $user->first_name }}} {{{ $user->last_name }}}
@stop

@section('image_url', '/img/concerts2.jpg')

@section('content')
	<h2>Member Since:</h2>
	<h3>{{{ $user->created_at->setTimezone('America/Chicago')->format('l, F jS Y') }}}</h3>

	<h2>Email:</h2>
	<h3>{{{ $user->email }}}</h3>

	@if(Auth::check() && Auth::id() == $user->id)

	    <a href="{{{ action('UsersController@edit', $user->id) }}}">
	        <input class="btn btn-default" value="Edit >>">
	    </a>
	    
	    <button class="btn btn-default" id="delete">Delete >></button>
	    <hr>
    @endif
	<h3>
		<a href="{{{ action('UsersController@index') }}}">
			All Users
		</a>
	</h3>
	<hr>

    {{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}

	<h2>Events Created:</h2>
	@foreach ($calendarEvents as $ce)
		<h3>
			<a href="{{{ action('CalendarEventsController@show', $ce->id) }}}">
				{{{ $ce->title }}}
			</a>
		</h3>
		<h4>{{{ CalendarEvent::formatDate($ce->start)->format('D. M. jS, Y') }}}</h4>
		<h4>{{{ $ce->location->place }}}</h4>
		<h4>{{{ $ce->location->city }}}, {{{ $ce->location->state }}} {{{ $ce->location->zip }}}</h4>
		<hr>

	@endforeach
@stop

@section('js')
    <script>
        "use strict";
        $(document).ready(function() {
            $('#delete').click(function() {
                var onConfirm = confirm('Are you sure you want to delete your account? This action will delete all of your posts and cannot be undone.');
                
                if(onConfirm) {
                    $('#formDelete').submit();
                }
            })
        });
    </script>
@stop
