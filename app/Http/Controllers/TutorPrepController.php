<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorPrepController extends Controller
{
    public function index()
    {
        return view('tutor.prep_index');
    }
}
