<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//custom auth routes
Route::post('/myregister', 'MyRegisterController@register')->name('myregister');

//register tutor account
Route::get('/create-tutor', 'MyRegisterController@createTutor')->name('tutor.create');
Route::post('/create-tutor/store', 'MyRegisterController@storeTutor')->name('tutor.store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');


//route for tutorials section

Route::group(['prefix' => 'tuts'], function(){
    Route::get('/', 'TutsController@index')->name('tuts.index');
    Route::get('/search', 'TutsController@search')->name('tuts.search');
    Route::get('/mytutorials', 'TutsController@mytuts')->name('mytuts');
});

//Route group for library
Route::group(['prefix' => 'library'], function(){
    Route::get('/', 'LibraryController@index')->name('library.index');
    Route::get('/mybooks', 'LibraryController@mybooks')->name('library.mybooks');
    Route::get('/read/{book}', 'LibraryController@read')->name('book.read');

    //group for college books
    Route::group(['prefix' => 'college'], function(){
        Route::get('/', 'CollegeLibraryController@index')->name('college.library');
        Route::get('/{slug}', 'CollegeLibraryController@view')->name('college.library.book');

    });

    //university books
    Route::group(['prefix' => 'university'], function(){
        Route::get('/', 'UniversityLibraryController@index')->name('university.library');
        Route::get('/{slug}', 'UniversityLibraryController@view')->name('university.library.book');
        Route::get('/{slug}/buy', 'UniversityLibraryController@buy')->name('university.library.book.buy');
    });
});

Route::group(['prefix' => 'tutor'], function(){
    Route::get('/', 'TutorController@index')->name('tutor.index');
    Route::get('/upload/book', 'TutorBookUploadController@createBook')->name('book.upload');
    Route::post('/upload/book/store', 'TutorBookUploadController@storeBook')->name('book.store');
});

Route::group(['prefix' => 'tuts', 'middleware' => 'auth'], function(){
    Route::get('/', 'TutsController@index')->name('tuts.index');
    Route::get('/search', 'TutsController@search')->name('tuts.search');
    Route::get('/mytutorials', 'MyTutsController@mytuts')->name('mytuts');
    Route::get('/class', 'MyTutsController@class')->name('class');
});

Route::group(['prefix' => 'prep', 'middleware' => 'auth'], function(){
    Route::get('/', 'PrepController@index')->name('prep.index');
    Route::get('/search', 'PrepController@search')->name('prep.search');
    Route::get('/mypreps', 'MyPrepController@mypreps')->name('mypreps');
    Route::get('/prep-class', 'MyPrepController@class')->name('prep.class');
});
