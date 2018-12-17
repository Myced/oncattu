<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTutsController extends Controller
{
    public function __construct()
    {
        // $this->middleware = 'auth';
    }
    public function mytuts()
    {
        return view('tuts.mytuts');
    }

    public function class()
    {
        return view('tuts.class');
    }
}
