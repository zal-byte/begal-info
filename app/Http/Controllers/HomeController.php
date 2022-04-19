<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    //
    public function home(){
        if(!Session::get('login')){
            return redirect(route('login_form'));
        }
        return view('lay.article');
    }

    public function getArticle(){
        return array('test');
    }
}
