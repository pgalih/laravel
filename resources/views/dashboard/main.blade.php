
@extends('dashboard/dashboard')

@section('content')
<div class="panel panel-primary">
  	<div class="panel-heading">
    	<h3 class="panel-title">Tasklist</h3>
  	</div>
  	
  	<div class="panel-body">
	  	<div class="list-group">
		  <a href="#" class="list-group-item active">Latihan</a>
		  <a href="#" class="list-group-item">Membuat halaman PHP</a>
		  <a href="#" class="list-group-item">Integrasi Database</a>
		  <a href="#" class="list-group-item">Membuat halaman CSS</a>
		  <a href="#" class="list-group-item">Mengumpulkan data</a>
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