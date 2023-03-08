<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login_res extends Controller
{
    public function login_index(){
        return view('login');
    }


    public function res_index(){
        return view('res');
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' =>'required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect(route('admin.dashboard'));

        }else{
            return back()->with('failed','Not matched');
        }
    }



    public function res_submit(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'password' =>'required'
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect(route('login.index'))->with('success','Successful, Login here');
    }

    public function logout(){
        auth::logout();
        return redirect(route('login.index'));
    }
}
