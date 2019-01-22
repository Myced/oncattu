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

    public function view($slug)
    {
        $prep = $this->getPrepFromSlug($slug);

        return view("prep.prep_details", compact('prep'));
    }

    public function enroll($slug)
    {
        $prep = $this->getPrepFromSlug($slug);

        return view("prep.prep_enrol", compact('prep'));
    }

    public function enrollMtn($slug)
    {
        $prep = $this->getPrepFromSlug($slug);
        $user = auth()->user();

        return view('prep.prep_payment_mtn', compact('prep', 'user'));
    }

    private function getPrepFromSlug($slug)
    {
        return Prep::where('slug', '=', $slug)->first();
    }

}
