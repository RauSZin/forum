<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'name' => 'required|string|min:2|max:50',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6||max:16|confirmed',
            'nickname' => 'required|string|min:2|max:10|unique:users'

        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $user                     =  new User();
        $user->name               =  $request->input('name');
        $user->nickname           =  $request->input('nickname');
        $user->email              =  $request->input('email');
        $user->type               =  $request->input('type');
        $user->password           =  $request->input('password');
        $user->save();
        
        //User::create([
        //     'type' => $data['type'],
        //     'name' => $data['name'],
        //     'nickname' => $data['nickname'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //      $user->save()
         //]);
    }
}
