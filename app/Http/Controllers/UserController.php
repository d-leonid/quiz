<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Games;

class UserController extends Controller
{
    //

    public function index()
    {
    	# code...
    }


    public function home(){
        $games = Games::orderBy('id','DESC')->get();
        return view('landing.main',['games' => $games]);
    }
}
