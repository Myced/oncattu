<?php

namespace App\Http\Controllers;

use App\Prep;
use Illuminate\Http\Request;

class PrepController extends Controller
{

    public function index()
    {
        $preps  = $this->getPreps();

        return view('prep.index', compact('preps'));
    }

    public function search()
    {
        $string = request()->keyword;
        return 'searching';
    }

    public function getPreps()
    {
        return Prep::where('status', '=', 'PUBLISHED')
                    ->orderBy('name', 'asc')->paginate();
    }

    public function searchPreps($key)
    {

    }

}
