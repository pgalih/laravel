@extends('dashboard/dashboard')

@section('title')
Add User Role
@endsection
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">


			{!! Form::open(array('action' => 'LoginController@store', 'class' => 'form-signin', 'method' => 'post')) !!}
		<legend>Please Login!</legend>
			@if(Session::has('message'))
			<p class="alert alert-info">{{ Session::get('message') }}</p>
			@endif
		  @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
		
		<div class="form-group">
			{!! Form::label('username', 'Username:', ['class' => '']) !!}
	    	{!! Form::text('username', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('password', 'Password:', ['class' => '']) !!}
	    	{!! Form::password('password',['class' => 'form-control']) !!}
		</div>	
		
			{!! Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
			{!! Form::close() !!}
		
	</div>
</div>
		
@endsection

