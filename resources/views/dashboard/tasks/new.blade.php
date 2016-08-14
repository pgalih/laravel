@extends('dashboard/dashboard')

@section('title')
Add User Role
@endsection
@section('content')

		

		
		{!! Form::open(array('action' => 'TasksController@store', 'class' => 'form')) !!}
    
	<div class="form-group">
	</div>
		
	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	   	{!! Form::label('priority', 'Priority:', ['class' => 'control-label']) !!}
		{!!Form::select('priority', array('1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5'), '5'); !!}
	</div>
	<div class="form-group">
	   	{!! Form::label('efectivity', 'Efectivity:', ['class' => 'control-label']) !!}
		{!!Form::select('efectivity', array('1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5'), '5'); !!}
	</div>


	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


		{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}

@endsection

