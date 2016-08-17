@extends('dashboard/dashboard')

@section('title')
Roles Administrator 
@endsection

@section('content')


<!-- Add New trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
  Add New Task
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Task</h4>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- End add New trigger modal -->

<!-- Link add new
<a href="tasks/add"  class="btn btn-success">Add New Task</a>
-->
</br>
<table class="table table-bordered table-hover table-striped table-responsive">

	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Priority</th>
			<th>Efectivity</th>
			<th>Description</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach ($tasks as $task)
			<tr>
				<td>
					{{ $task->id }}
				</td>
				<td>
					{{ $task->title }}
				</td>
				<td>
					{{ $task->priority }}
				</td>
				<td>
					{{ $task->efectivity }}
				</td>
				<td>
					{{ $task->description }}
				</td>
				<td>



<!-- Edit trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmodal-{{$task->id}}">
  Edit
</button>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="editmodal-{{$task->id}}Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editmodal-{{$task->id}}Label">Edit Task</h4>
      </div>
      <div class="modal-body">			      
			      {!! Form::model($task,array('action' => ['TasksController@update', $task->id], 'class' => 'form', 'method' => 'PUT')) !!}
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
		    </div>
		    <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	{!! Form::submit('Update Data', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>



<!-- Button trigger modal
					<div class="btn-group">
						<a href="{{ url('admin/tasks/edit/'.$task->id) }}" class="btn btn-info">Edit</a>
 -->
				            <form action="{{ url('admin/tasks/'.$task->id) }}" method="POST" class="form-horizontal">
					            {{ csrf_field() }}
					            {{ method_field('DELETE') }}
					            <button type="submit" class="btn btn-danger">
					                <i class="fa fa-trash"></i> Delete
					            </button>
				            </form>
				 	</div>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection
