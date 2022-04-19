<?php

namespace App\Http\Controllers;

use App\Library\AuthHandler;
use Illuminate\Http\Request;

use Session;

AuthHandler::getInstance();

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
        $username = $request->username;
        $password = $request->password;
        $fullname = $request->full_name;
        $verify_password = $request->verify_password;

        if( strlen($username) > 0 ){
            if( strlen($fullname) > 0 ){
                if( $password == $verify_password ){
                    $response = AuthHandler::signup( $username, $fullname, $password);
                    if( $response['status'] == 1 ){
                        return back()->with('success', 'Daftar berhasil');
                    }else{
                        return back()->withErrors([$response['msg']]);
                    }
                }else{
                    return back()->withErrors(["Password doesn't match"]);
                }
            }else{
                return back()->withErrors(["Don't leave name blank"]);
            }
        }else{
            return back()->withErrors(['You neen an username']);
        }

    }

    public function log_in_post( Request $request ){
        $username = $request->username;
        $password = $request->password;

        $response = AuthHandler::login( $username, $password );

        if( $response['status'] == 1){
            Session::put('login', 1);
            Session::put('full_name', $response['full_name']);
            return redirect(route('home'));
        }else{
            return back()->withErrors([$response['msg']]);
        }
    }

    public function logout(){
        if(Session::get('login')){
            Session::forget('login');
            return redirect(route('login_form'));
        }
    }
}
