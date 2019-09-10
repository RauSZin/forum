<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <style>
        html{
            height:100%;
            width:100%;
        }
        body{
            font-family: 'Rajdhani', sans-serif;
            background-image:linear-gradient(#fff, #fff);
            background-size:100%;

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
  <li class="nav-item"><a class="btn btn-outline-dark mr-3" href="{{ url('/') }}">Home</a></li>
  <li class="nav-item"><a class="btn btn-outline-dark " href="{{ route('login') }}">Login</a></li>
    </ul>
</nav>
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4 text-center p-5">
                   
                    <h2>Registrar</h2>
             
                <div>

                    <form action="{{ route('register') }}" method="POST" enctype="form-cadastro">
                        {{  csrf_field() }}
                        <input type="hidden" name="type" datatype="" value="user" readonly="readonly">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nickname" placeholder="Nickname">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="confirm" placeholder="Confirm">
                        </div>
            
                        <button type="button" class="btn btn-outline-success">Join</button>
                    </form>

                </div>
        </div>
    </body>
</html>
