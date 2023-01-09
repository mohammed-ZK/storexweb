<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.login');
    }
    public function sign_up(){
        return view('user.signup');
    }
    public function home(){
        return view('user.home');
    }
    public function category(){
        return view('user.categories');
    }
    public function anime_details(){
        return view('user.anime_details');
    }
    public function anime_watching(){
        return view('user.anime_watching');
    }
    public function blog_details(){
        return view('user.blog_details');
    }
    public function blog(){
        return view('user.blog');
    }
    public function add_video(){
        return view('user.add');
    }
}
