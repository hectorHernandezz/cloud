<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('myaccount');
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
        return view('people');
    }
}
