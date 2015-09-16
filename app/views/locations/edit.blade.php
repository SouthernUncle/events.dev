@extends('layouts.master')

@section('title', 'Edit Venue')

@section('heading')
	{{{ $location->place }}}
@stop

@section('subheading')
	{{{ $location->city }}}, {{{ $location->state }}}
@stop

@section('image_url', '/img/pen.jpg')
@stop

@section('content')
	{{ Form::model($location, array('action' => array('LocationsController@update', $location->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

		{{ Form::label('place', 'Venue') }}
		{{ Form::text('place', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $location->place }}}',
				'autofocus'
			])
		}}

		{{ Form::label('address', 'Street Address') }}
		{{ Form::text('address', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $location->address }}}'
			])
		}}

		{{ Form::label('city', 'City') }}
		{{ Form::text('city', null, 
			[
				'class' 	  => 'form-control',
				'value'		  => '{{{ $location->city }}}'
			])
		}}

		{{ Form::label('state', 'State') }}
		{{ Form::text('state', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $location->state }}}'
			])
		}}

		{{ Form::label('zip', 'Zip') }}
		{{ Form::number('zip', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => '{{{ $location->zip }}}',
				'min'		  => 501,
				'max'		  => 99950,	
			])
		}}

		<button class="btn btn-default" id="post">Submit</button>

	{{ Form::close() }}
@stop
