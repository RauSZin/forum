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
     @foreach ($users as $user)
<tr>
      <td><a href="/posts/postDescribe/{{$post->id}}">{{$post->filter}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$user->name}}</td>

   </tr>

      @endforeach
     @endforeach
   </table>
