@foreach (posts as post)
  @echo "{{$post->description}}"
@endforeach

@extends('layouts.app')


@section('content')

<style>
  .label{
  }
</style>

<div class="container">

 <div class="row justify-content-center">

   <div class="col-md-8">
    <div><center> <a class = "btn btn-primary" href="/posts/create">Fazer Postagem</a> </center></div>
     @foreach ($posts as $post)
     <div class="card mt-4">

       <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">

       <div class="card-body">{{$post->description}}</div>
       <div class="row">

        <div class="ml-4  "><center><a class = "btn btn-success pr-4 " href="/like/{{$post->id}}"> Like</a> </center> <p><b>Likes: {{$post->likes}}</b></p></div>
         <div class="ml-2 "><center><a class="btn btn-danger" href="/deslike/{{$post->id}}">Deslike</a></center></div>

       </div>

       @if (isset($comments))
       @foreach ($comments as $comment)
          @if ($comment->post_id == $post->id)
            @foreach ($users as $user)
              @if ($user->id == $comment->user_id)
              <div class="content" style="margin-left: 2%">  <p><b>{{$user->name}}:</b> {{$comment->comment}} </p></div>
              @endif
            @endforeach
          @endif
        @endforeach
        @endif

       <form action="/comment/{{$post->id}}" method="GET">
          @csrf
        <div class="form-group">
       <textarea name="comment" class="form-control">
       </textarea>
     </div>
       <input class = "btn btn-primary " type="submit" value="Comentar"/>
</form>
     </div>

     @endforeach

   </div>

 </div>

</div>

@endsection
