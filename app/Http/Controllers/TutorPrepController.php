<?php

namespace App\Http\Controllers;

use App\Prep;
use App\Functions;
use Illuminate\Http\Request;

class TutorPrepController extends Controller
{
    private const THUMBNAIL_PATH = 'uploads/preps/thumbnails/';

    public function index()
    {
        $preps  = Prep::where('teacher_id', '=', $this->getUser()->id)->get();

        return view('tutor.prep_index', compact('preps'));
    }

    private function getUser()
    {
        return auth()->user();
    }

    public function create()
    {
        return view('tutor.prep_create');
    }

    public function store(Request $request)
    {
        $prep = new Prep;

        $prep->name = $request->name;
        $prep->code = $this->generateCode();
        $prep->slug = $this->prepareSlug($request->name);
        $prep->teacher_id = $tutor = $this->getTutorID();
        $prep->area = $request->area;
        $prep->fascilitator = $request->fascilitator;
        $prep->price = Functions::getMoney($request->price);
        $prep->description = $request->description;

        //upload the image
        $imgObject = $request->thumbnail;

        $imgName = time() . $imgObject->getClientOriginalName();
        $path = SELF::THUMBNAIL_PATH . $imgName;

        //move the file
        $imgObject->move(SELF::THUMBNAIL_PATH, $imgName);

        //now save the thumbnail
        $prep->thumbnail = $path;

        //save the tut
        $prep->save();

        //now redirect to the
        $prep = Prep::where('teacher_id', '=', $tutor)
                                ->orderBy('id', 'desc')
                                ->first();
        return redirect(route('tutor.prep.detail', ['code' => $prep->code]));
    }

    private function prepareSlug($string)
    {
        $slug = str_slug($string);

        //make sure this slug does not exist
        $slugs = Prep::where('slug', '=', $slug)->get();

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
        $constant = "PREP" . date('ym') . '-';

        $last_id = Prep::all()->pluck('id')->last();

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
        $tuts = Prep::where('code', '=', $code)->get();

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
            return '-101';
        }

    }

    public function view($code)
    {
        $prep = Prep::where('code', '=', $code)->first();


        return view('tutor.prep_details', compact('prep'));
    }

    public function publish($code)
    {
        $prep = $this->getPrep($code);

        $prep->status = "PUBLISHED";

        $prep->save();

        //flash session
        session()->flash('success', 'Your Prep has been Published. It can now bee seen in Prep list');

        return back();
    }

    public function down($code)
    {
        $prep = $this->getPrep($code);

        $prep->status = "PENDING";

        $prep->save();

        session()->flash('success', 'Your Prep has been taken down. ');

        return back();
    }

    private function getPrep($code)
    {
        return Prep::where('code', '=', $code)->first();
    }
}
