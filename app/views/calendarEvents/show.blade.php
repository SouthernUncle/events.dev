@extends('layouts.master')

@section('title')
	{{{ $ce->title }}}
@stop

@section('heading')
	{{{ $ce->title }}}
@stop

@section('subheading')
	{{{ $ce->location->place }}}
	-in-
	{{{ $ce->location->city }}}, {{{ $ce->location->state }}} 
@stop

@section('image_url')
	'{{{ $ce->img_url }}}'
@stop

@section('content')
	<h1>{{{ $ce->title }}}</h1>
	<h3> @
		<a href="{{{ action('LocationsController@show', $ce->location->id) }}}">
			{{{ $ce->location->place }}}
		</a>
	</h3>
	<h4>{{{ CalendarEvent::formatDate($ce->start)->format('l, F jS Y @ g A') }}}</h4>
	<h3>${{{ $ce->price }}}</h3>

	{{ $ce->description }}

	
	<p>
		<a href="{{{ action('CalendarEventsController@unRegisterFromEvent', $ce->id) }}}">
			Decline RSVP
		</a>
	</p>
	
	<p>
		<a href="{{{ action('CalendarEventsController@registerForEvent', $ce->id) }}}">
			RSVP
		</a>
	</p>
	


	<h5>Hosted by: 
		<a href="{{{ action('UsersController@show', $ce->user->id) }}}">
			{{{ $ce->user->username }}}
		</a>
	</h5>

	<h4>Going:</h4>
	
	@foreach($ce->eventusers as $user)
		<h5>{{{  $user->username }}}</h5>
	@endforeach
	

	<h3>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			Upcoming Events
		</a>
	</h3>
	
	@if(Auth::check() && Auth::id() == $ce->user->id)

	    <a href="{{{ action('CalendarEventsController@edit', $ce->id) }}}">
	        <input class="btn btn-default" value="Edit >>">
	    </a>
	    
	    <button class="btn btn-default" id="delete">Delete >></button>
    @endif

    {{ Form::open(array('action' => array('CalendarEventsController@destroy', $ce->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}
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
