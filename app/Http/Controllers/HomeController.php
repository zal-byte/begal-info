<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ArticleHandler;

use Session;

ArticleHandler::getInstance();

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
       $article = ArticleHandler::getArticle();
       return $article;
    }


}
