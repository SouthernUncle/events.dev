@extends('layouts.master')

@section('title', 'Edit Account')

@section('heading', 'Edit Account')

@section('subheading', '{{{ $user->username }}}')

@section('image_url', '/img/pen.jpg')

@section('content')
	{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

		{{ Form::label('first_name', 'First') }}
		{{ Form::text('first_name', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $user->first_name }}}',
				'autofocus'
			])
		}}

		{{ Form::label('last_name', 'Last') }}
		{{ Form::text('last_name', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $user->last_name }}}'
			])
		}}

		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', null, 
			[
				'class' 	  => 'form-control',
				'value'		  => '{{{ $user->username }}}'
			])
		}}

		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, 
			[
				'class' 	  => 'form-control', 
				'value'		  => '{{{ $user->email }}}'
			])
		}}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'Current Password',
			])
		}}

		{{ Form::label('password', 'New Password') }}
		{{ Form::password('newPass', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'New Password',
			])
		}}

		{{ Form::label('password', 'Confirm New Password') }}
		{{ Form::password('newPassConfirm', null, 
			[
				'class' 	  => 'form-control', 
				'placeholder' => 'Confirm New Password',
			])
		}}

		<button class="btn btn-default" id="post">Submit</button>

	{{ Form::close() }}
@stop

@section('js')

@stop
