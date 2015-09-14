@extends('layouts.master')

@section('title')
	{{{ $ce->title }}}
@stop

@section('style')

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
	<h3>{{{ $ce->description }}}</h3>
	<p>{{{ CalendarEvent::formatDate($ce->start)->format('l, F jS Y @ g A') }}}</p>
	<p>
		<a href="">
			RSVP
		</a>
	</p>

@stop

@section('js')

@stop
