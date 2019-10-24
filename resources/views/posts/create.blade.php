<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <style type="text/css">
          body{
    font-family:'Rajdhani', sans-serif;
    background-color:white;
    color:black;
  }
  #description{
    resize: none;

  }
  .input-title{
    border:none;
    width:100%;
    box-shadow:0 2px 2px rgba(0,0,0,0.1);
    padding:5px;
    border-radius:1px;
    margin-bottom:10px;
  }
  .textarea{
    background-color:#f2f2f2;
    border:none;
    width:100%;
    box-shadow:0 2px 2px rgba(0,0,0,0.1);
    padding:5px;
    border-radius:1px;
  }
   #image_path{
    width:100%;
    border:none;
   }
   .mt-1{
    margin-top:10px;
   }
    </style>
</head>
<div class=" centralizador">
<h1 class="">Poste seu assunto !</h1>
<form method="POST" enctype="multipart/form-data" action="/posts">
 {{csrf_field() }}

        <input placeholder="Título" id="filter" class="input-title" type="text" name="filter">

        <textarea id="description" class="textarea" type="text" name="description" required=""> </textarea>



                        <input type="file" name="image_path" class="form-control mt-1">



                        <button type="submit" class="btn btn-success mt-1">

                            Postar

                        </button>

</form>
<a class = "btn btn-warning" href="/posts/list">Voltar</a>
</div>

</div>
