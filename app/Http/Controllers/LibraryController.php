<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        return view('library.index');
    }

    public function mybooks()
    {
        //get all my books

        return view('library.mybooks');
    }

    public function read($book)
    {
        // dd($book);
        //get the book path and continue
        return view('library.read');
    }
}
