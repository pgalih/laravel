@extends('dashboard/dashboard')

@section('title')
Add User Role
@endsection
@section('content')

		{!! Form::open(array('action' => 'RolesController@store', 'class' => 'navbar-form navbar-right')) !!}
	    {!! Form::text('name', 'Role name', array('class' => 'form-control')) !!}
	    {!! Form::text('status', 'Status', array('class' => 'form-control')) !!}
	    {!! Form::submit('Add', array('class' => 'btn btn-success')) !!}
		{!! Form::close() !!}

		{!! Form::open([
	    'route' => 'tasks.store'
		]) !!}

	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

		{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}

@endsection

