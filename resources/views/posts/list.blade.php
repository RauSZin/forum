<style>
  .label{
  }
</style>
 <p>Links dos posts<p>
<div class="container">

 <div class="row justify-content-center">

   <div class="col-md-8">
     @foreach ($posts as $post)
     <div class="row">

       {{$post->filter}}

     </div>
     @endforeach
   </div>

</div></div>
