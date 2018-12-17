<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPrepController extends Controller
{
    public function mypreps()
    {
        return view('prep.mypreps');
    }

    public function class()
    {
        return view('prep.class');
    }
}
