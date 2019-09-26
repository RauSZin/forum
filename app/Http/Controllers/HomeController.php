<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
# use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()){
            return redirect('home');
        }
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

  public function myAccount()
  {

    $postUser = array();
    $id_user = Auth()->id();
    #$post = Post::all();
    #foreach ($post as $posts) {
    #  if ($posts['id_user'] == $id_user){
    #    $postUser[] = $posts;
    #  }
    #}
    $user = User::all();
    #$comments = Comments::all();
    return view('myAccount')->with('id_user', $id_user);#->with('posts', $postUser)->with('user',$user)->with('comments', $comments);

  }
}
