<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function signup(){
        return view('pages.signup');
    }
    public function layout(){
        return view('layout.layout');
    }
}
