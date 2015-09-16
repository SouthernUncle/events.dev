@extends('layouts.master')

@section('title', 'Create Venue')

@section('heading', 'Create Venue')

@section('subheading', 'Make the Music Happen')

@section('image_url', '/img/pen.jpg')

@section('content')
	{{ Form::open(array('action' => 'LocationsController@store', 'method' => 'POST', 'class' => 'form-horizontal')) }}

		{{ Form::label('place', 'Venue') }}
		{{ Form::text('place', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => 'Paper Tiger', 
				'value'		  => '{{{ Input::old("place") }}}',
				'autofocus'
			])
		}}

		{{ Form::label('address', 'Street Address') }}
		{{ Form::text('address', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => '2410 N Saint Marys St', 
				'value'		  => '{{{ Input::old("address") }}}'
			])
		}}

		{{ Form::label('city', 'City') }}
		{{ Form::text('city', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => 'San Antonio',
				'value'		  => '{{{ Input::old("city") }}}'
			])
		}}

		{{ Form::label('state', 'State') }}
		{{ Form::text('state', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => 'TX', 
				'value'		  => '{{{ Input::old("state") }}}'
			])
		}}

		{{ Form::label('zip', 'Zip') }}
		{{ Form::number('zip', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => '78212', 
				'value'		  => '{{{ Input::old("zip") }}}',
				'min'		  => 501,
				'max'		  => 99950,	
			])
		}}

		<button class="btn btn-default" id="post">Submit</button>

	{{ Form::close() }}
@stop
