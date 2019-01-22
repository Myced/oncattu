<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class UniversityLibraryController extends Controller
{
    public function index()
    {
        //get all university books and send
        $books = Book::where('type', '=', 'university')->get();

        return view('library.university.index', compact('books'));
    }

    public function view($slug)
    {
        //find the book and pass it along
        $book = Book::where('slug', '=', $slug)->first();

        return view('library.university.book')->with('book', $book);
    }

    public function buy($slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

    }

    public function momoBuy($slug)
    {
        $book = Book::where('slug', '=', $slug)->first();
        $user = auth()->user();


        return view('library.university.book_momo', compact('book', 'user'));
    }
}
