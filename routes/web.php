<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// All Routes, Middlewares, Views and more;
Route::get('/', function () {
    return view('welcome',[
        'jobs'=>[
            "name"=>"ahmed",
            "arnab"=>"google",
        ]
    ]);
});

Route::get('/hello', function(){
    return response("Hello world")
    ->header("Content-Type","text/plain")
    ->header("foo",'bar');
});

Route::get('/posts/{id}', function($id){
    // ddd($id);
    return response("post $id");
})->where('id','[0-9]+');

Route::get('/search', function(Request $request){
    return $request['name'].$request['age'];
});