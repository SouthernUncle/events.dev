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
	<h3>Member Since:</h3>
	<h4>{{{ $user->created_at->setTimezone('America/Chicago')->format('l, F jS Y') }}}</h4>

	<h3>Email:</h3>
	<h4>{{{ $user->email }}}</h4>

	@if(Auth::check() && Auth::id() == $user->id)

	    <a href="{{{ action('UsersController@edit', $user->id) }}}">
	        <input class="btn btn-default" value="Edit >>">
	    </a>
	    
	    <button class="btn btn-default" id="delete">Delete >></button>
    @endif

    {{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}

	<h3>Events Created:</h3>
	@foreach ($calendarEvents as $ce)
		<h4>
			<a href="{{{ action('CalendarEventsController@show', $ce->id) }}}">
				{{{ $ce->title }}}
			</a>
		</h4>
		<h5>{{{ CalendarEvent::formatDate($ce->start)->format('D. M. jS, Y') }}}</h5>
		<h5>{{{ $ce->location->place }}}</h5>
		<h5>{{{ $ce->location->city }}}, {{{ $ce->location->state }}}</h5>
		<hr>

	@endforeach

	<h4>
		<a href="{{{ action('UsersController@index') }}}">
			All Users
		</a>
	</h4>
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
