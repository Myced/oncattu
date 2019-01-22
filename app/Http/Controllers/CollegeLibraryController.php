<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CollegeLibraryController extends Controller
{
    public function index()
    {
        //get all university books and send
        $books = Book::where('type', '<>', 'university')->get();

        return view('library.college.index', compact('books'));
    }

    public function view($slug)
    {
        //find the book and pass it along
        $book = Book::where('slug', '=', $slug)->first();

        return view('library.college.book')->with('book', $book);
    }

    public function buy($slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

    }

    public function momoBuy($slug)
    {
        $book = Book::where('slug', '=', $slug)->first();
        $user = auth()->user();


        return view('library.college.book_momo', compact('book', 'user'));
    }
}
