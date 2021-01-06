<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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




//BASIC DATABASE
Route::get('/contact','App\Http\Controllers\PostsController@contact');
Route::get('/display/{id}/{name}/{password}','App\Http\Controllers\PostsController@display');
Route::get('/insert/{title}',function ($title){
    DB::insert('insert into posts(title)values(?)',[$title]);
});

Route::get('/read/{id}',function($id){

   $results =  DB::select('select * from posts where id = ?',[$id]);

   return $results;

   foreach ($results as $post){

       return $post->title;
   }


})->name('read');;

Route::get('/update/{id}/{title}',function ($id,$title){

    $updated = DB::update('update posts set title =? where id =?',[$title,$id]);

    //return $updated;

    return redirect()->route('read', ['id' => $id]);

});

Route::get('/delete',function (){

    $deleted = DB::delete('delete from posts where id = ?',[1]);

    return $deleted;


});






// ELOQUENT
Route::get('/find',function (){

    $posts = Post::all();

    foreach ($posts as $post){

        return $post->title;
    };

   // return $posts;

});

Route::get('/findwhere',function (){

    $post= Post::where('id',2)->get();
    return $post;


});

Route::get('/findmore',function (){

    $posts = new Post;

    $posts->title = 'New title Eloquent';

    $posts->save();


});

Route::get('/fillable',function (){

    Post::create(['title'=>'Yehia','content'=>'I love merna so much']);



});

Route::get('Updateelo',function (){


    Post::where('id',2)->update(['title'=>'YehiaM','content'=>'Content']);
});

Route::get('/delete',function (){

    $post = Post::find(2);

    $post->delete();

});

Route::get('/delete2',function (){

    Post::destroy([3]);



});

Route::get('/softdelete',function () {

  Post::find(5)->delete();




});

Route::get('/readsoftdelete',function (){

    $post =Post::withTrashed()->where('id',5)->get();

    return $post;

});
