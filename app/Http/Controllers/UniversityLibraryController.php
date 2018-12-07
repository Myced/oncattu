<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityLibraryController extends Controller
{
    public function index()
    {
        return view('library.university.index');
    }

    public function view($id)
    {
        //find the book and pass it along
        
        return view('library.university.book');
    }
}
