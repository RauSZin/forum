
 <p>Links dos posts<p>
   <table border="1">

   <tr>
     @foreach ($posts as $post)
     @foreach ($users as $user)
      <td><p><b>"{{$post->filter}}"</b> created at {{$post->created_at}}</p></td>
      <td>{{$user->name}}</td>
   </tr>

      @endforeach
     @endforeach
   </table>
