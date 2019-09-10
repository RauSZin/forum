<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
           body{
            font-family: 'Rajdhani', sans-serif;
        }a, a:hover{
            color:black;
        }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="https://static.thenounproject.com/png/640563-200.png" width="30" height="30" class="d-inline-block align-top" alt="">
    HelpIF
  </a>
  <ul class="navbar-nav navbar-right">

            @if (Route::has('login'))
                <div class="pr-3">
                    @if (Auth::check())
                        <a class="btn btn-outilne-dark" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-outilne-dark" href="{{ url('/login') }}">Login</a>
                        <a class="btn btn-outilne-dark" href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            </ul>
</nav>

    </body>
</html>
