@extends('dashboard/dashboard')

@section('title')
Roles Administrator 
@endsection

@section('content')


<a href="tasks/add"  class="btn btn-primary">Add New Task</a>
</br>
<table class="table table-bordered table-hover">

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
					<a href="#"  class="btn btn-primary">Update</a>
				 <form action="{{ url('/admin/tasks/'.$task->id) }}" method="POST">
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
