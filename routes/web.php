<?php

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
Route::get('/banana/{color}', function ($color) {
    return view('banana',compact('color'));
});
Route::get('/about', function () {
    return view('about');
});

Route::resource('/post','PostController')->middleware('auth');
// Route::get('/post','PostController@index');
// Route::get('/post/create','PostController@create');
// Route::get('/post/{id}','PostController@store');

// Route::get('/post/{id}/banana/{user}',function($id,$user){
    // return 'post'.$id;
    // return view('post',compact('id','user'));
    // return view('post',['id' => $id , 'user' => $user]);
    // return view('post')->with('id',$id);`

// })
// Route::get('/post','PostController@test');
// Route::get('/post/asdf','PostController@asdf');
Route::resource('/product','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
