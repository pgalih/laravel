<!DOCTYPE html>
<html lang="en">
<html>

<head>
 <meta charset="utf-8">
	<title> @yield('title')</title>
{!! Html::style('css/style.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
{!! Html::style('css/bootstrap-theme.css') !!}
{!! Html::style('css/bootstrap-theme.min.css') !!}
{!! Html::style('css/bootstrap.css') !!}
{!! HTML::style('css/bootstrap.min.css') !!}
<style type="text/css">
  body {

    padding-top: 60px;
  }

</style>
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
    @yield('content')      
  </div>
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{!!Html::script('js/npm.js')!!}
{!!Html::script('js/bootstrap.js')!!}

</body>
</html>