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

    private function getTutorialFromSlug($slug)
    {
        return Tutorial::where('slug', '=', $slug)->first();
    }

    public function mytuts()
    {
        return view('tuts.mytuts');
    }

    public function view($slug)
    {
        $tutorial = $this->getTutorialFromSlug($slug);
        
        return view("tuts.tut_details", compact('tutorial'));
    }

    public function enroll($slug)
    {
        $tutorial = $this->getTutorialFromSlug($slug);
        
        return view("tuts.tut_enrol", compact('tutorial'));
    }

    public function enrollMtn($slug)
    {
        $tutorial = $this->getTutorialFromSlug($slug);
        $user = $this->getUser();

        return view('tuts.tut_payment_mtn', compact('tutorial', 'user'));
    }

    private function getUser()
    {
        return auth()->user();
    }
}
