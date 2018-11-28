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
    return view('home');
});

Auth::routes();

//custom auth routes
Route::post('/myregister', 'MyRegisterController@register')->name('myregister');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');


//route for tutorials section
Route::group(['prefix' => 'tuts', 'middleware' => 'auth'], function(){
    Route::get('/', 'TutsController@index')->name('tuts.index');
    Route::get('/search', 'TutsController@search')->name('tuts.search');
    Route::get('/mytutorials', 'MyTutsController@mytuts')->name('mytuts');
    Route::get('/class', 'MyTutsController@class')->name('class');
});

Route::group(['prefix' => 'prep', 'middleware' => 'auth'], function(){
    Route::get('/', 'PrepController@index')->name('prep.index');
    Route::get('/search', 'PrepController@search')->name('prep.search');
    Route::get('/mypreps', 'MyPrepController@mytuts')->name('mypreps');
    Route::get('/prep-class', 'MyPrepController@class')->name('prep.class');
});
