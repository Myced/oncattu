<?php

namespace App\Http\Controllers;

use App\Book;
use App\MyBook;
use App\Functions;
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
        $myBooks = MyBook::where('user_id', '=', $this->getUser()->user_id)->get();


        return view('library.mybooks', compact('myBooks'));
    }

    private function getUser()
    {
        return Functions::getUser();
    }

    public function read($slug)
    {
        $book  = Book::where('slug', '=', $slug)->first();

        $isBought = $this->isBought($book->id);



        return view('library.read', compact('isBought', 'book'));
    }

    private function isBought($bookID)
    {
        $user = $this->getUser();

        $isBought = false;

        $books = MyBook::where('user_id', '=', $user->user_id)
                        ->where('book_id', '=', $bookID)
                        ->get();

        if(count($books) > 0)
        {
            $isBought = true;
        }

        return $isBought;
    }
}
