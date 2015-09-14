@extends('layouts.master')

@section('title')
	{{{ $calendarEvent->title }}}
@stop

@section('style')

@stop

@section('heading')
	{{{ $calendarEvent->title }}}
@stop

@section('subheading')
	{{{ $calendarEvent->location->place }}}
	-in-
	{{{ $calendarEvent->location->city }}}, {{{ $calendarEvent->location->state }}} 
@stop

@section('image_url')
	'/img/concerts3.jpg'
@stop

@section('content')
	<h1>{{{ $calendarEvent->title }}}</h1>
	<h3>{{{ $calendarEvent->description }}}</h3>
	<p>{{{ CalendarEvent::formatDate($calendarEvent->start)->format('l, F jS Y @ g A') }}}</p>
	<p>
		<a href="">
			RSVP
		</a>
	</p>

@stop

@section('js')

@stop
