@extends('dashboard/dashboard')

@section('title')
Roles Administrator 
@endsection

@section('content')


<a href="roles/add"  class="btn btn-primary">Add New Role</a>
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
					<a href="#"  class="btn btn-primary">Update</a>
					<a href="{{'RolesController@store'}}"  class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection
