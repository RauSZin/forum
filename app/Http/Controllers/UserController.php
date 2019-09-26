<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
     public function index()
  {

    $postUser = array();
    $id_user = Auth()->id();
    $user = User::find($id_user);
    return view('myAccount')->with('user', $user);

   


    #->with('posts', $postUser)->with('user',$user)->with('comments', $comments);
    #$comments = Comments::all();
    #$post = Post::all();
    #foreach ($post as $posts) {
    #  if ($posts['id_user'] == $id_user){
    #    $postUser[] = $posts;
    #  }
    #}

  }
}
