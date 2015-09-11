@extends('layouts.master')

@section('title')
	{{ $calendarEvent->title }}
@stop

@section('style')

@stop

@section('heading')
	{{ $calendarEvent->title }}
@stop

@section('subheading')
	{{ $calendarEvent->location->city }}, {{ $calendarEvent->location->state }} @ {{ $calendarEvent->location->place }}
@stop

@section('image_url')
	'/img/concerts3.jpg'
@stop

@section('content')
	<h1>{{ $calendarEvent->title }}</h1>
	<h3>{{ $calendarEvent->description }}</h3>
	<p>Begins: {{ $calendarEvent->start }}</p>
	<p>Ends: {{ $calendarEvent->end }}</p>
	<p>
		<a href="">
			RSVP
		</a>
	</p>

@stop

@section('js')

@stop
