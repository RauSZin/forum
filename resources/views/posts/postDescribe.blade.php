@foreach ($post as $posts)

   <div class="card mt-4">

     <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">

     <div class="card-body">{{$post->description}}</div>
     <div class="row">

@endforeach
