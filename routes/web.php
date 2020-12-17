<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function (){

//     return "Hi about";

// });

// /*Route::get('/{id}/{name}',function ($id,$name){

//     return "Hi " . $name ."Your Id IS " . $id;



// });*/

//  Route::get('/admin/posts',array('as'=>'admin.home' , function () {
//      $url = route('admin.home');
//     return "Hellooo  " . $url;
//  }));

//Route::get('/post/{id}','App\Http\Controllers\PostsController@index');

//Route::resource('posts','App\Http\Controllers\PostsController');
Route::get('/contact','App\Http\Controllers\PostsController@contact');
Route::get('/display/{id}/{name}/{password}','App\Http\Controllers\PostsController@display');
