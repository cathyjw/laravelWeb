<?php

use App\Post;
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

//Pass data
//Route::get('/post/{id}','PostController@index');

//Route::resource('posts','PostController');
//
//Route::get('/contact','PostController@contact');
//Route::get('/post/{id}/{name}/{password}','PostController@show_post');

//Route::get('/insert', function(){
//    
//    DB::insert('insert into posts(title, body) values(?,?)',['First Post', 'Laravel PHP']);
//    
//});

//Route::get('/read', function(){
//    
//    $results = DB::select('select * from posts where id = ?', [1]);
//    
//    foreach($results as $result){
//        return $result->body;
//    }
//    
//});

//Route::get('/update', function(){
//    
//    $result = DB::update('update posts set title = "Update First Post" where id = ?', [1]);
//    return $result;
//});

//


/*
|--------------------------------------------------------------------------
| ELOQUENT DATABASE MODEL
|--------------------------------------------------------------------------
*/

//Route::get('/read', function(){
//    $posts = Post::all();
//    
//    foreach($posts as $post){
//        return $post->title;
//    }
//});

//Route::get('/find', function(){
//    $post = Post::find(2);
//    
//    
//    return $post->title;
//    
//});


//Route::get('/updatedata', function(){
//   $post = Post::find(2);
//   $post->title = "Welcome";
//   $post->body = "Welcome to Laravel world!";
//   
//   $post->save();
//});


//Route::get('/create', function(){
//    Post::create(['title'=>'Eloquent', 'body'=>'https://laravel.com/docs/5.8/eloquent']);
//});

//Route::get('/delete',function(){
//   $post = Post::find(1);
//   $post->delete();
//});

//Route::get('/delete2',function(){
//    Post::destory(3);
//    Post::destory([4,5]);
//    Post::where('is_admin',0)->delete();
//    
//});

//Route::get('/softdelete', function(){
//    Post::find(4)->delete();
//});

//Route::get('/readsoftdelete', function(){
//    
//   $post = Post::withTrashed()->where('is_admin',0)->get();
//   $post = Post::onlyTrashed()->where('is_admin',0)->get();
//   return $post;
//   
//});