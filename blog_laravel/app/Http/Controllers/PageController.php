<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function posts(){
        return view('posts');
    }
    public function contact(){
        return view('contact');
    }
    public function contact_action(Request $request){
        return redirect()->route('contact')->with('suc','the form is worked');
        
    }
}
