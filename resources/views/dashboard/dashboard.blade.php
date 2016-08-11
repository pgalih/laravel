<!DOCTYPE html>
<html lang="en">
<html>

<head>
 <meta charset="utf-8">
	<title> Dashboard</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		{!! Html::style('css/style.css') !!}
		{!! Html::style('css/bootstrap-theme.css') !!}
		{!! Html::style('css/bootstrap-theme.css.css') !!}
		{!! Html::style('css/bootstrap-theme.min.css') !!}
		{!! Html::style('css/bootstrap.css') !!}
		{!! HTML::style('css/bootstrap.min.css') !!}
</head>

<body>

login Form
{!! Form::open() !!}
{!! Form::text('name', @$name) !!}
{!! Form::password('password') !!}
{!! Form::submit('Send') !!}
{!! Form::close() !!}

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
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- /nav -->
	
	@yield('content')

{!!Html::script('js/npm.js')!!}
{!!Html::script('js/bootstrap.js')!!}

</body>
</html>