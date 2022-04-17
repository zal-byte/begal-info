<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function log_in(){
        return view('lay.login');
    }
    public function sign_up(){
        return view('lay.signup');
    }

    public function sign_up_post( Request $request ){

    }
    public function log_in_post( Request $request ){
        $username = $request->username;
        $password = $request->password;

        print_r($username . "|" . $password);
    }
}
