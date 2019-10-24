<head>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
  <style>
  body{
    font-family:'Rajdhani', sans-serif;
    background-color:white;
    color:black;
  }
  .border{
    border-radius:5px;
    margin-top:10px;
    box-shadow:0px 2px 5px rgba(0,0,0,0.1);
  }
  a, a:hover{
    text-decoration: none;
    color:black;
  }
  .ml-5{
    margin-left:50px;
  }
  .posts:hover{
    background-color:lightgray;
    transition:0.6s;
  }
  </style>
</head>
<div class="container">
  <center><h1>Bem-Vindos ao nosso Fórum</h1></center>


 @foreach ($posts as $post)
      <div class="col-md-5 ml-5 border posts">
        <h3><strong><a href="/posts/postDescribe/{{$post->id}}">{{$post->filter}}</strong></h3>
          <p>{{$post->created_at}}</p>
          @foreach ($users as $user)
            @if ($post->user_id == $user->id)
            <p>Postado por: {{$user->name}}</p>

            @endif


          @endforeach
        </div>
@endforeach

</div>
