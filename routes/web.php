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

Route::group(['prefix' => 'tutor', 'middleware' => 'auth'], function(){
    Route::get('/', 'TutorController@index')->name('tutor.index');
    Route::get('/upload/book', 'TutorBookUploadController@createBook')->name('book.upload');
    Route::post('/upload/book/store', 'TutorBookUploadController@storeBook')->name('book.store');

    Route::group(['prefix' => 'tut'], function(){
        Route::get('/', 'TutorTutController@index')->name('tutor.tuts.index');
        Route::get('/create', 'TutorTutController@create')->name('tutor.tuts.create');
        Route::post('/store', 'TutorTutController@store')->name('tutor.tuts.store');
        Route::get('/{code}', 'TutorTutController@view')->name('tutor.tut.detail');
        Route::get('/{code}/publish', 'TutorTutController@publish')->name('tutor.tut.publish');
        Route::get('/{code}/down', 'TutorTutController@down')->name('tutor.tut.down');
        Route::post('/{code}/store', 'TutorTutContentController@store')->name('tutor.tut.content.store');
    });

    Route::group(['prefix' => 'prep'], function(){
        Route::get('/', 'TutorPrepController@index')->name('tutor.prep.index');
        Route::get('/create', 'TutorPrepController@create')->name('tutor.prep.create');
        Route::post('/store', 'TutorPrepController@store')->name('tutor.prep.store');
        Route::get('/{code}', 'TutorPrepController@view')->name('tutor.prep.detail');
        Route::get('/{code}/publish', 'TutorPrepController@publish')->name('tutor.prep.publish');
        Route::get('/{code}/down', 'TutorPrepController@down')->name('tutor.prep.down');
        Route::post('/{code}/store', 'TutorPrepContentController@store')->name('tutor.prep.content.store');
    });

    Route::group(['prefix' => 'books'], function(){
        Route::get('/', 'TutorBookUploadController@index')->name('tutor.books.index');
        Route::get('/upload', 'TutorBookUploadController@createBook')->name('tutor.book.upload');
        Route::post('/upload/store', 'TutorBookUploadController@storeBook')->name('tutor.book.store');
    });
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
