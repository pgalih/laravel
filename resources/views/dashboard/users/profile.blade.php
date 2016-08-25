
@extends('dashboard/dashboard')

@section('content')
<div class="panel panel-primary">
  	<div class="panel-heading">
    	<h3 class="panel-title">Tasklist</h3>
  	</div>
  	
  	<div class="panel-body">
	  	<div class="list-group">


	  	<div class="row">
  <div class="col-sm-9">
    My
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <a href="#" class="list-group-item active">My Profile</a>
		  <a href="#" class="list-group-item">Name : {{ Auth::user()->name }}</a>
		  <a href="#" class="list-group-item">Phone number : {{ Auth::user()->no_hp }}</a>
		  <a href="#" class="list-group-item">Email Address : {{ Auth::user()->email }} </a>
		  <a href="#" class="list-group-item">Role : {{ Auth::user()->role_id }} </a>
      </div>
      <div class="col-xs-4 col-sm-6">
        <a href="#" class="list-group-item active">My Tasklist</a>
		  
		  
      </div>
    </div>
  </div>
</div>
		  
		</div>

		
		<nav aria-label="...">
		 	<ul class="pager">
			    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Sebelumnya</a></li>
			    <li class="next"><a href="#">Selanjutnya <span aria-hidden="true">&rarr;</span></a></li>
  			</ul>
		</nav>
  	</div>
</div>


@endsection