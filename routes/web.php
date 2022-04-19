<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/article/post', function(){
    return View::make('lay.article_layout')->with('data', HomeController::getArticle())->render();
})->name('article_post');


Route::get('/auth/login',[AuthController::class, 'log_in'])->name('login_form');
Route::get('/auth/signup', [AuthController::class,'sign_up'])->name('signup_form');

Route::post('/auth/login_post', [AuthController::class, 'log_in_post'])->name('login_post');
Route::post('/auth/signup_post', [AuthController::class, 'sign_up_post'])->name('signup_post');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');