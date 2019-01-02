<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutsController extends Controller
{
    public function index()
    {
        $tuts = $this->getTutorials();

        return view('tuts.index', compact('tuts'));
    }

    public function getTutorials()
    {
        $tutorials = Tutorial::where('status', '=', 'PUBLISHED')
                                ->paginate();

        return $tutorials;
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
