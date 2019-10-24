@extends('layouts.app')
@section('content')

 <p>Links dos posts<p>
   <table border="1">

   <tr>

     <td>Título</td>
     <td>Postado em</td>
     <td>Postado por</td>
  </tr>

     @foreach ($posts as $post)
<tr>
       <td><a href="/posts/postDescribe/{{$post->id}}">{{$post->filter}}</td>
       <td>{{$post->created_at}}</td>
       @foreach ($users as $user)
          @if ($post->user_id == $user->id)
            <td>{{$user->name}}</td>
          @endif


      @endforeach
</tr>
     @endforeach
   </table>
