<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Admin;
use App\Games;
use Session;
use Hash;

class AdminController extends Controller
{
    //
    public function login_page()
    {
    	return view('auth.login');
    }

    public function login(Request $request){
    	$email = $request->input('email');
    	$password = $request->input('password');
        $rules = array(
            'email' => 'required|email|max:255|',
            'password' => 'required|string|min:6',
        );
        $validator = Validator::make($request->all(), $rules);
    	if ($validator->fails()) {
            return Redirect::back()
            ->withErrors($validator) // send back all errors to the login form
            ->withInput();
        } else {

	      	$user = Admin::where('email',$email)->first();
	      	if(!empty($user)){
	            if(Hash::check($password, $user->password))
	            {
	                Session::put('userData', $user);
                   return Redirect('/Admin/home');
	            }
	        }
        return Redirect::back();
   		}
	}

	public function index(){
        $games = Games::orderBy('id','DESC')->get();
        return view('admin.home',['games' => $games]);
	}

    public function addGames()
    {
        return view('admin.games');
    }

    public function createGames(Request $request)
    {
        $title = $request->input('title');
        $image = $request->file('image');
        $rules = array(
            'title'       => 'required',
            'image'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()
            ->withErrors($validator) // send back all errors to the login form
            ->withInput();
        } else {
            $games = new Games;
            $games->title = $title;
            $games->img = $this->image_upload($image);
            if ($games->save()) {
                // return view('admin.questions',['q_number' => 1]);
            }
            return Redirect::back();
        }
    }

        // update question
    public function editGames($id)
    {
        return view('admin.edit',['game' => Games::find($id)]);
    }


    // update Games
    public function updateGames(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $image = $request->file('image');
        $rules = array(
            'title'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()
            ->withErrors($validator) // send back all errors to the login form
            ->withInput();
        } else {
            $games = Games::find($id);
            $games->title = $title;
            if (!is_null($image)) {
                $games->img = $this->image_upload($image);
            }
            if ($games->save()) {
                return Redirect('/Admin/home');
            }
            return Redirect::back();
        }
    }


    // delete Games
    public function deleteGames($id)
    {
        // $questions  =  Questions::where('game_id',$id)->get();
        // if (!empty($questions[0])) {
        //     $answer_id = [];
        //     foreach ($questions as $question) {
        //         Answers::where('question_id',$question->id)->delete();
        //     }

        //     Questions::where('game_id',$id)->delete();
        // }
        Games::where('id',$id)->delete();

        return Redirect::back();
    }

    // upload image
    public function image_upload($image){
        if (!empty($image)) {
            $path = public_path('images/');
            $file_name = time() . "_" . $image->getClientOriginalName();
            $image->move($path, $file_name);
            return $file_name;
        }
    }


}
