<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutsController extends Controller
{
    public function index()
    {
        return view('tuts.index');
    }

    public function search(Request $request)
    {
        dd($request);
    }

    public function mytuts()
    {
        return view('tuts.mytuts');
    }
}
