<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("home");
    }
    public function contact(){
        return view("contact");
    }
    public function history(){
        return view("history");
    }
    public function login(){
        return view("login");
    }
    public function major(){
        return view("major");
    }
    public function regester(){
        return view("regester");
    }
    public function indexdoctoe(){
        return view('doctors.index');
    }

    public function doctor(){
        return view("doctors.doctor");
    }
    
    public function contact_action(Request $request){

        // dd($request);
       return redirect()->route('contact')->with('suc','the form is worked');
    }
    
}
