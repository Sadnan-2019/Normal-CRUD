<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){


        return view('front-end.home.home');
    }



    public function team(){

        return view ('front-end.team.team-font');
    }
}
