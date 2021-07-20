<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usertracker;
use Session;

class usertrack extends Controller
{
    function login()
    {
        return view("login");
    }
    function dashboard(){
        return view("dashboard");
    }
    function panel(Request $req){
        $email=$req->get('email');
        $password=$req->get('password');
        $data=usertracker::where(['email'=>$email,'password'=>$password])->get();
        if(count($data)>0){
            session::put($password,$email);
            return redirect('/dashboard');
        }
        else{
            session::flash('errMsg','Email or Password incorrect');
            return redirect('/login');
        }
    }
}
