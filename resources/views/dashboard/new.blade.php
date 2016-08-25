@extends('dashboard/dashboard')

@section('title')
Add User Role
@endsection
@section('content')

	{!! Form::open(array('action' => 'RolesController@store', 'class' => 'form')) !!}
    {!! Form::text('name', 'Role name', array('class' => 'form-control')) !!}
    {!! Form::text('status', 'Status', array('class' => 'form-control')) !!}
    {!! Form::submit('Add', array('class' => 'btn btn-success')) !!}
	{!! Form::close() !!}

@endsection

