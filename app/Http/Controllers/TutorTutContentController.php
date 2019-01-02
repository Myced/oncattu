<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\TutorialContent;
use Illuminate\Http\Request;

class TutorTutContentController extends Controller
{
    public function store(Request $request, $code)
    {
        //handdle post request here
        $content = new TutorialContent;
        $tut = Tutorial::where('code', '=', $code)->first();

        $content->tutorial_id = $tut->id;
        $content->name = $request->chapter_name;
        $content->title = $request->chapter_title;
        $content->description = $request->description;
        if($request->pdf != null)
        {
            $content->pdf = $this->uploadPdf($request->pdf);
        }

        if($request->ppt != null)
        {
            $content->ppt = $this->uploadPpt($request->ppt);
        }

        //save the content
        $content->save();

        session()->flash('success', 'Content has been uploaded');

        return back();

    }

    private function uploadPdf($object)
    {
        return '/video';
    }

    private function uploadPpt($object)
    {
        return '/ppt';
    }
}
