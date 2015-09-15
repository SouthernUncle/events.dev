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
	<h5>Hosted by: {{{ $ce->user->username }}}</h5>
	{{ $ce->description }}
	<h4>{{{ CalendarEvent::formatDate($ce->start)->format('l, F jS Y @ g A') }}}</h4>

	@if(Auth::check() && Auth::id() == $ce->user->id)

	    <a href="{{{ action('CalendarEventsController@edit', $ce->id) }}}">
	        <input class="btn btn-default" value="Edit >>">
	    </a>
	    
	    <button class="btn btn-default" id="delete">Delete >></button>
    @endif

    {{ Form::open(array('action' => array('CalendarEventsController@destroy', $ce->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}

	<p>
		<a href="">
			RSVP
		</a>
	</p>
	<h4>
		<a href="{{{ action('CalendarEventsController@index') }}}">
			Upcoming Events
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
