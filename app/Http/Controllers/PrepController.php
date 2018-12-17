<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('prep.index');
    }

    public function search()
    {
        return 'searching';
    }
    
}
