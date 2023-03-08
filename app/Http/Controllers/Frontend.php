<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
   public function home(){
       return view('frontend.home');
   }

   public function about(){
       return view('frontend.about');
   }


    public function course(){
        return view('frontend.course');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
