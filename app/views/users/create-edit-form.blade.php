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
		'placeholder' => 'Email',
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