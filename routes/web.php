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

Route::get('/delete', function(){
   
    $result = DB::delete('delete from posts where id = ?', [1]);
    return $result;
});
