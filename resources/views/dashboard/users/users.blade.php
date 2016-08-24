@extends('dashboard/dashboard')

@section('title')
Roles Administrator 
@endsection

@section('content')

<!-- Add New trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
  Add New User
</button>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
      </div>
      <div class="modal-body">			      
			      {!! Form::open(array('action' => ['UsersController@store'], 'class' => 'form', 'method' => 'POST')) !!}
			<div class="form-group">
			</div>
			<div class="form-group">
			    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
			    {!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('username', 'username:', ['class' => 'control-label']) !!}
			    {!! Form::text('username', null, [  'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			    {!! Form::label('Email', 'Email:', ['class' => 'control-label']) !!}
			    {!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>	

			<div class="form-group">
			    {!! Form::label('no_hp', 'No Telpon:', ['class' => 'control-label']) !!}
			    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Role', 'Role:', ['class' => 'control-label']) !!}
			    

			    {!! Form::select('role_id', $datas, ['class' => 'form-control']) !!}
			</div>


			<div class="form-group">
			    {!! Form::label('Password', 'Password:', ['class' => 'control-label']) !!}
			    {!! Form::password('password', ['class' => 'form-control']) !!}
			</div>	
			<div class="form-group">
			    {!! Form::label('Job Description', 'Description:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('job_description', null, ['class' => 'form-control']) !!}
			</div>
		    </div>
		    <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	{!! Form::submit('Add User', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- End add New trigger modal -->



</br>
<table class="table table-bordered table-hover table-striped table-responsive">

	<thead>

		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>User Name</th>
			<th>Email</th>
			<th>No Handphone</th>
			<th>Role</th>
			<th>Job Description</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
@foreach ($users as $user)
			<tr>
				<td>
					{{ $user->id }}
					
				</td>
				<td>
					{{ $user->name }}
				</td>
				<td>
					{{ $user->username }}
				</td>
				<td>
					{{ $user->email }}
				</td>

				<td>
					{{ $user->no_hp }}
				</td>

				<td>
					{{ $user->role->name }}
				</td>

				<td>
					{{ $user->job_description }}
				</td>
				<td>



<!-- Edit trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmodal-{{$user->id}}">
  Edit
</button>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="editmodal-{{$user->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editmodal-17Label">Edit Task</h4>
      </div>
      <div class="modal-body">				      
			      {!! Form::model($user,array('action' => ['UsersController@update', $user->id], 'class' => 'form', 'method' => 'PUT')) !!}
			<div class="form-group">
			</div>
			<div class="form-group">
			    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
			    {!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('username', 'username:', ['class' => 'control-label']) !!}
			    {!! Form::text('username', null, [  'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			    {!! Form::label('Email', 'Email:', ['class' => 'control-label']) !!}
			    {!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>	

			<div class="form-group">
			    {!! Form::label('no_hp', 'No Telpon:', ['class' => 'control-label']) !!}
			    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Role', 'Role:', ['class' => 'control-label']) !!}
			   <!--  {!! Form::select('role_id', ['1'=>'1','2'=>'2'], ['class' => 'form-control']) !!}-->
			   {!! Form::select('role_id', $datas, ['class' => 'form-control']) !!} 
			</div>
	
	

			<div class="form-group">
			    {!! Form::label('Password', 'Password:', ['class' => 'control-label']) !!}
			    {!! Form::password('password', ['class' => 'form-control']) !!}
			</div>	
			<div class="form-group">
			    {!! Form::label('Job Description', 'Description:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('job_description', null, ['class' => 'form-control']) !!}
			</div>
		    </div>
		    <div class="modal-footer">
		    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        	{!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

					<form action="{{ url('admin/users/delete/'.$user->id)}}" method="POST" class="form-horizontal">
					    {{ csrf_field() }}
					    {{ method_field('DELETE') }}
					    <button type="submit" class="btn btn-danger">
					        <i class="fa fa-trash"></i> Delete
					    </button>
					</form>
				</td>
				

	@endforeach
	</tbody>
</table>



@endsection