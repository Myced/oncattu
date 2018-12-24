<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CollegeLibraryController extends Controller
{
    public function index()
    {
        return view('library.college.index');
    }

    public function view($slug)
    {
        dd($slug);
        //get the book
        $book = Book::where('slug', '=', $slug)->get();
    }
}
