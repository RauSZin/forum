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
        .bg-img{
            background-image: url('image/bg.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            color: white;

        }
        .card{
            box-shadow:0 0px 5px 3px #f5f5f5;
            border:none;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
<div class="bg-img">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-5">
                <center><h2><i>Bem-Vindo</i></h2></center>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <p class="text-justify pr-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
            .a {
              fill: none;
          }

          .b {
              clip-path: url(#a);
          }

          .c,
          .d {
              fill: #fff;
          }

          .d {
              opacity: 0.5;
              isolation: isolate;
          }
      </style>
      <clipPath id="a">
        <rect class="a" width="1920" height="75"></rect>
    </clipPath>
</defs>
<title>wave</title>
<g class="b">
    <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
</g>
<g class="b">
    <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
</g>
<g class="b">
    <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
</g>
<g class="b">
    <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
</g>
</svg>
</div>
<div class="container mt-5">
    <div class="row align-items-center text-justify">

        <div class="col-md-3 offset-md-1 card mr-5">
            <h3 class="pt-3">Transtornos</h2>
            <hr>
            <p class="p-2">Manifestação de emoções e comportamentos irregular (controle dos impulsos, modo de relacionamento, etc.)envolvendo vários aspectos da vida do... <a href="">Ver Mais</a></p>
        </div>
        <div class="col-md-3  card mr-5">
            <h3 class="pt-3">Esquizofrenia</h2>
            <hr>
            <p class="p-2">Percepção delirante. Uma percepção absolutamente normal recebe uma significação delirante, que ocorre de modo simultâneo ao ato perceptivo, em ger... <a href="">Ver Mais</a></p>
        </div>
        <div class="col-md-3 card">
        <h3 class="pt-3">TOC</h2>
            <hr>
            <p class="p-2">As síndromes obsessivas caracterizam-se por idéias, pensamentos, fantasias ou imagens persistentes, que surgem de forma recorrente na con... <a href="">Ver Mais</a></p>
        </div>
        <
    </div>
</div>

</body>
</html>
