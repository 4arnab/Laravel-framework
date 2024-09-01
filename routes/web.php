<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// User Defined Namespaces and Modeles
use App\ModelS\Listing;

// All Routes, Middlewares, Views and more;
Route::get('/', function () {
    return view('listings', [
        "heading" => "Latest Listings",
        "listings" => Listing::all(),
    ]);
});


Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listing'=>Listing::find($id),
    ]);
})->where('id', '[0-9]+');










// EXAMPLE ROUTES

// Route::get('/hello', function(){
//     return response("Hello world")
//     ->header("Content-Type","text/plain")
//     ->header("foo",'bar');
// });

// Route::get('/posts/{id}', function($id){
//     // ddd($id);
//     return response("post $id");
// })->where('id','[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request['name'].$request['age'];
// });