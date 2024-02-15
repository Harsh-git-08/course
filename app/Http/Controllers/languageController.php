<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class languageController extends Controller
{

    public function lang_html(Request $request){
        if ($request->session()->has('loggedin') && $request->session()->get('loggedin')) {
            return view('languages/html');

        }
        else{
                return redirect("/login")->with('fail','You must log in first!');
        }
    }
    public function lang_css(){
        return view('languages/css');
    }
    public function lang_js(){
        return view('languages/javascript');
    }
    public function lang_python(){
        return view('languages/python');
    }
    public function lang_php(){
        return view('languages/php');
    }
    public function lang_laravel(){
        return view('languages/laravel');
    }
    public function lang_ai(){
        return view('languages/ai');
    }
    public function lang_vizual(){
        return view('languages/vizuals');
    }
}
