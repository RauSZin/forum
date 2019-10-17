<head>
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<div class="side">

        <a href="{{ url('/') }}" style="background:linear-gradient(110deg, #ffae00,#ffc547)orange">Home</a>
       <a href="{{ url('/login') }}" style="background:linear-gradient(110deg,#fcc05e,#fff387);">Login</a>
    
</div>

<form method="POST" action="{{ route('register') }}" class="box">
    <h1>Registrar</h1>
    {{csrf_field()}}



    <input placeholder="Nome" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required="" autofocus="">


    @if ($errors->has('name'))

    <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('name') }}</strong>

    </span>

    @endif

    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="">


    @if ($errors->has('email'))

    <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('email') }}</strong>

    </span>

    @endif


    <input placeholder="Senha" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="">


    @if ($errors->has('password'))

    <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('password') }}</strong>

    </span>

    @endif



    <input placeholder="Confirme a senha" id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">



    <input type="submit" class="logbtn" value="Rgistrar">



    


    <p>

        Ao se registrar, você aceita nossas Condições, a Política de Dados e a Política de Cookies.

    </p>






    <p>

        Você tem uma conta? <a href="{{ route('login') }}">entrar</a>
    </p>