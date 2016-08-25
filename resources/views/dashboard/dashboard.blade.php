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

<!--
<style type="text/css">
  body {

  padding-top: 60px;
  }

</style>
-->

</head>

<body>

<!-- nav -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tasklist Manager</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tasks">Tasklist</a></li>
            
            <li><a href="users">users list</a></li>
            <li><a href="profile">Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="{{ url('logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ url('logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
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