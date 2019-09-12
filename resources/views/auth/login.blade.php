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
        <style>
        body{
            font-family: 'Rajdhani', sans-serif;
        }
        .btn-outline-dark{
            border:none;
        }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="https://static.thenounproject.com/png/640563-200.png" width="30" height="30" class="d-inline-block align-top" alt="">
    HelpIF
  </a>
  <ul class="navbar-nav">
  <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
  
</ul>

</nav>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4 text-center p-5">
                   
                    <h2>Login</h2>
             
                <div>
                    <form action="{{ route('login') }}" method="POST" enctype="form-login">
                        {{  csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                            
                           <button type="submit" class="btn btn-outline-success">Logar</button>
                    </form>

                </div>
        </div>
        @yield('content')
    </body>
</html>