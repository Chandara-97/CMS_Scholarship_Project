<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('UserInterface.home');
});

Route::get("/create","ArticleController@create")->middleware("auth");
Route::post("/create","ArticleController@store")->middleware("auth");

Route::prefix("/edit")->group(function (){
    Route::get("/{id}","ArticleController@edit")->middleware("auth");
    Route::post("{id}","ArticleController@update")->middleware("auth");
});

Route::prefix("/post")->group(function (){
    Route::get("/{status}/{id}","ArticleController@status")->middleware("auth");
});

Route::prefix("/admin")->group(function (){
    Route::get("/message","MessageController@create");
    Route::post("/message/send","MessageController@store");
    Route::get("/","AdminController@dashboard");
    Route::get("/contact","ContactController@index");
    Route::get("/dashboard","AdminController@dashboard");
    Route::get("/article","ArticleController@index")->middleware("auth");
    Route::get("/comment","CommentController@index")->middleware("auth");
    Route::get("/profile/{id}","UserController@profile");
    Route::prefix("/user")->group(function (){
        Route::get("/","UserController@index")->middleware("auth");
        Route::get("/create","UserController@create")->middleware("auth");
        Route::post("/store","UserController@store");
        Route::post("/update/{id}","UserController@update");
        Route::post("/update/{id}","UserController@store");
    });
    Route::get("/role/{role}/{id}","UserController@role");
});

Route::post("/comment/{id}","ArticleController@comment")->middleware("auth");

Route::prefix("/delete")->group(function (){
    Route::get("/{id}","ArticleController@destroy")->middleware("auth");
    Route::get("/admin/{id}","CommentController@destroy")->middleware("auth");
});

Route::get("/cat/{cat}","ArticleController@show_cat");
Route::get("/about",function (){
    return view("about");
});

Route::post("/admin/{id}","ArticleController@admin")->middleware("auth");
Route::get("/delete/user/{id}","UserController@destroy");
Route::get("/edit/user/{id}","UserController@edit");


Route::post("/search","ArticleController@search");

Route::get("/index","ArticleController@show");
Route::get("/post/{id}","ArticleController@post");

Route::prefix("/contact")->group(function (){
    Route::post("/","ContactController@store");
    Route::get("/","ContactController@show");
    Route::get("/status/{status}/{id}","ContactController@status");
    Route::get("/delete/{id}","ContactController@destroy");
});

Route::post("user/update/{id}","ProfileController@update");
Route::get("/profile/edit","ProfileController@edit");
Route::get("/profile","ProfileController@show");
Route::post("/article/{id}/like","ArticleLikeController@store")->middleware("auth");
Route::post("/article/{id}/dislike","ArticleLikeController@destroy")->middleware("auth");

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/scholarship',function(){
    return view('scholarship');
});
Route::get('/source',function(){
    return view('source');
});

Route::get('/aboutus',function(){
    return view('UserInterface.aboutus');
});

Route::get('/contactus',function(){

    return view('UserInterface.contactus');
});
