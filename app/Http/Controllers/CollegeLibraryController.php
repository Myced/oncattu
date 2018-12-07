<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeLibraryController extends Controller
{
    public function index()
    {
        return view('library.college.index');
    }
}
