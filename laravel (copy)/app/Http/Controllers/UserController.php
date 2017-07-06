<?php

namespace App\Http\Controllers;

use App\User;
use App\Friend;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function myaccount()
    {
        $user = Auth::user();
        $friends = Friend::where('userid1', '=' , $user->userid)->get();
        $array = array();

        foreach ($friends as $friend) {
            $userFriend = User::find($friend->userid2);
            array_push($array, $userFriend);
        }
        
        return view('myaccount')->with('array',$array);
    }

    public function change_password()
    {
        return view('change_password');
    }

    public function messageboard()
    {
        return view('messageboard');
    }

    public function messages()
    {
        return view('messages');
    }

    public function people()
    {
        $users = User::paginate(20);
        return view('people')->with('users', $users);
    }

}
