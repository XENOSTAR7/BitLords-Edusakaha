<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function display_sign_up(){
        return view('signup');
    }

    public function display_index(){
        return view('index');
    }

    public function display_sign_in(){
        return view('signin');
    }
}
