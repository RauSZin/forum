<head>

	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Styles -->
	<style type="text/css">
	body{
		font-family: 'Rajdhani', sans-serif;
	}
</style>
</head>
<nav class="navbar navbar-expand-lg navbar-light ">
	<a class="navbar-brand" href="#">
		<img src="https://static.thenounproject.com/png/640563-200.png" width="30" height="30" class="d-inline-block align-top" alt="">
		HelpIF
	</a>
	<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
				<li class="nav-item"><a href="{{ route('login')}}" class="nav-link">Login</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>


	</ul>

</nav>