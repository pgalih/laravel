<!DOCTYPE html>
<html lang="en">
<html>

<head>
 <meta charset="utf-8">
	<title> Dashboard</title>
{!! Html::style('css/style.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
{!! Html::style('css/bootstrap-theme.min.css') !!}
{!! Html::style('css/bootstrap.css') !!}
{!! HTML::style('css/bootstrap.min.css') !!}
</head>

<body>

 <!-- nav -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#">Project name</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
         	{!! Form::open(array('class' => 'navbar-form navbar-right')) !!}
            {!! Form::text('username', 'Username', array('class' => 'form-control')) !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
            {!! Form::submit('Send', array('class' => 'btn btn-success')) !!}
	        {!! Form::close() !!}
        </div><!--/.navbar-collapse -->
    </div>
</nav>
    <!-- /nav -->
	
<div class="container">
 	<div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
     </div>
</div>

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




	@yield('content')


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{!!Html::script('js/npm.js')!!}
{!!Html::script('js/bootstrap.js')!!}

</body>
</html>