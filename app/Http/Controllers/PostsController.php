<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostsController extends Controller
{
 public function __construct()
 {
     $this->middleware('auth');
 }

 public function index(){
     $posts = Post::all();
     $users = User::all();
     return view('posts.list')->with('posts', $posts)->with('users', $users);

 }

 public function describe(){
     $posts = Post::find($id);
     $comments = Comments::all();
     $users = User::all();
     return view('posts.postDescribe')->with('posts', $posts)->with('comments',$comments)->with('users', $users);

 }


 public function create() {
    return view('posts.create');
}

 public function store(Request $request){

    $this->validate($request, [
    'image_path' => 'required|image',
]);
     $post = Post::create([
         'user_id' => auth()->id(),
         'image_path' => request()->file('image_path')->store('posts', 'public'),
         'description' => request('description'),
         'filter' => request('filter'),
         'likes' => 0
     ])->save();
     return redirect('home');
 }

}
