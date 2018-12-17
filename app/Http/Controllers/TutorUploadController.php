<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorUploadController extends Controller
{
    public function createBook()
    {
        return view('tutor.upload_book');
    }

    public function storeBook(Request $request)
    {
        dd($request);
    }
}
