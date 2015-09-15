@extends('layouts.master')

@section('title', 'Concert Lister - Create Account')

@section('heading', 'Create Account')

@section('subheading', 'Concert Lister')

@section('image_url', '/img/concerts2.jpg')

@section('content')
	{{ Form::open(array('action' => 'UsersController@store', 'method' => 'PUT', 'class' => 'form-horizontal')) }}

		{{ Form::label('first_name', 'First') }}
		{{ Form::text('first_name', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'Jim',
				'value'		  => '{{{ Input::old("first_name")',
				'autofocus'
			])
		}}

		{{ Form::label('last_name', 'Last') }}
		{{ Form::text('last_name', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'Morrison',
				'value'		  => '{{{ Input::old("last_name")'
			])
		}}

		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', null, 
			[
				'class' 	  => 'form-control',
				'placeholder' => 'jdmorrison',
				'value'		  => '{{{ Input::old("username")'
			])
		}}

		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'morrison@thedoors.band',
				'value'		  => '{{{ Input::old("email")'
			])
		}}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', null, ['class' => 'form-control'])}}
				
		{{ Form::label('password', 'Confirm') }}
		{{ Form::password('password_confirmation', null, ['class' => 'form-control'])}}

		<button class="btn btn-default">Submit</button>

	{{ Form::close() }}
@stop
