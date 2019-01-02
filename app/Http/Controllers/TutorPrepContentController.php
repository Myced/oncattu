<?php

namespace App\Http\Controllers;

use App\Prep;
use App\PrepContent;
use Illuminate\Http\Request;

class TutorPrepContentController extends Controller
{
    const PDF_PATH = 'uploads/preps/pdf/';
    const PPT_PATH = 'uploads/preps/ppt/';

    public function index()
    {
        return true;
    }

    public function store(Request $request, $code)
    {
        //handdle post request here
        $content = new PrepContent;
        $prep = Prep::where('code', '=', $code)->first();

        $content->prep_id = $prep->id;
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
