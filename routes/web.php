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

    });

    //university books
    Route::group(['prefix' => 'university'], function(){
        Route::get('/', 'UniversityLibraryController@index')->name('university.library');
        Route::get('/{id}', 'UniversityLibraryController@view')->name('university.library.book');
    });
});

Route::group(['prefix' => 'tutor'], function(){
    Route::get('/', 'TutorController@index')->name('tutor.index');
    Route::get('/upload/book', 'TutorUploadController@createBook')->name('book.upload');
    Route::post('/upload/book/store', 'TutorUploadController@storeBook')->name('book.store');
});
