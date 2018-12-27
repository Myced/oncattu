<?php

namespace App\Http\Controllers;

use App\Functions;
use App\Tutorial;
use Illuminate\Http\Request;

class TutorTutController extends Controller
{

    private const THUMBNAIL_PATH = 'uploads/tuts/thumbnails/';

    public function index()
    {
        return view('tutor.tut_index');
    }

    public function create()
    {
        //display a form to create a new tutorial
        return view('tutor.tut_create');
    }

    public function store(Request $request)
    {
        $tut = new Tutorial;

        $tut->name = $request->name;
        $tut->code = $this->generateCode();
        $tut->slug = $this->prepareSlug($request->name);
        $tut->teacher_id = $tutor = $this->getTutorID();
        $tut->area = $request->area;
        $tut->program = $request->program;
        $tut->price = Functions::getMoney('4.000');
        $tut->description = $request->description;

        //upload the image
        $imgObject = $request->thumbnail;

        $imgName = time() . $imgObject->getClientOriginalName();
        $path = SELF::THUMBNAIL_PATH . $imgName;

        //move the file
        $imgObject->move(SELF::THUMBNAIL_PATH, $imgName);

        //now save the thumbnail
        $tut->thumbnail = $path;

        //save the tut
        $tut->save();

        //now redirect to the
        $tutorial = Tutorial::where('teacher_id', '=', $tutor)
                                ->orderBy('id', 'desc')
                                ->first();
        return redirect(route('tutor.tut.detail', ['code' => $tutorial->code]));
    }

    private function prepareSlug($string)
    {
        $slug = str_slug($string);

        //make sure this slug does not exist
        $slugs = Tutorial::where('slug', '=', $slug)->get();

        if(count($slugs) > 0)
        {
            return $slug . '-' . $this->generateString(12);
        }

        return $slug;
    }

    private function generateString($length = 10)
    {
        return str_random($length);
    }

    private function generateCode()
    {
        $constant = "TUT" . date('ym') . '-';

        $last_id = Tutorial::all()->pluck('id')->last();

        $id = $last_id + 1;
        $uid = '';

        if($id  < 10)
        {
            $uid = '000' . $id;
        }
        elseif($id < 100)
        {
            $uid  = '00' . $id;
        }
        elseif($id < 1000)
        {
            $uid = '0' . $id;
        }
        else {
            $uid = $id;
        }

        $code = $constant . $uid;

        //check that this user id does not exist
        $tuts = Tutorial::where('code', '=', $code)->get();

        if(count($tuts) > 0)
        {
            $uid .= rand(0, 100);
            $code = $constant . $uid;
        }

        return $code;
    }

    private function getTutorID()
    {
        //this should return the id of the tutor involved
        if(auth()->user())
        {
            return auth()->user()->id;
        }
        else {
            return '101';
        }

    }

    public function view($code)
    {
        $tutorial = Tutorial::where('code', '=', $code)->first();

        return view('tutor.tut_detail', compact('tutorial'));
    }
}
