@extends('dashboard/dashboard')

@section('title')
Roles Administrator 
@endsection

@section('content')




<!-- Add New trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
  Add New Role
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
	        {!! Form::open(array('action' => 'RolesController@store', 'class' => 'form')) !!}
		<div class="form-group">
		</div>			
		<div class="form-group">
			{!! Form::label('name', 'Role Name :', ['class' => 'control-label']) !!}
		    {!! Form::text('name', '', array('class' => 'form-control')) !!}
    		
		</div>
		<div class="form-group">
		   	{!! Form::label('status', 'Status :', ['class' => 'control-label']) !!}
			{!! Form::text('status', 'active', array('class' => 'form-control')) !!}
		</div>
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Create New Role', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- End add New trigger modal -->


</br>


<table class="table table-bordered table-hover">

	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>



	<tbody>
		@foreach ($roles as $role)
			<tr>
				<td>
					{{ $role->id }}
				</td>
				<td>
					{{ $role->name }}
				</td>
				<td>
					{{ $role->status }}
				</td>
				<td>
					<!-- Edit trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmodal-{{$role->id}}">
  Edit
</button>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal-{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="editmodal-{{$role->id}}Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editmodal-{{$role->id}}Label">Edit Task</h4>
      </div>
      <div class="modal-body">			      
			    
			    {!! Form::model($role,array('action' => ['RolesController@update', $role->id], 'class' => 'form', 'method' => 'PUT')) !!}
		<div class="form-group">
		</div>			
		<div class="form-group">
			{!! Form::label('name', 'Role Name :', ['class' => 'control-label']) !!}
		    {!! Form::text('name', '', array('class' => 'form-control')) !!}
    		
		</div>
		<div class="form-group">
		   	{!! Form::label('status', 'Status :', ['class' => 'control-label']) !!}
			{!! Form::text('status', 'active', array('class' => 'form-control')) !!}
		</div>
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit('Update Role', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

					<form action="{{ url('admin/roles/delete/'.$role->id) }}" method="POST" class="form-horizontal">
					            {{ csrf_field() }}
					            {{ method_field('DELETE') }}
					            <button type="submit" class="btn btn-danger">
					                <i class="fa fa-trash"></i> Delete
					            </button>
				            </form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection
