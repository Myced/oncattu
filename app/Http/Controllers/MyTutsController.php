<?php

namespace App\Http\Controllers;

use App\Tutorial;
use App\Functions;
use App\MyTutorial;
use App\WatchedTutorial;
use App\TutorialContent;
use Illuminate\Http\Request;

class MyTutsController extends Controller
{
    public function __construct()
    {
        // $this->middleware = 'auth';
    }
    public function mytuts()
    {
        //grab  the users tuts 
        $user = Functions::getUser();

        //get the users tuts 
        $mytuts  = MyTutorial::where('user_id', '=', $user->user_id)->get();

        return view('tuts.mytuts', compact('mytuts'));
    }

    public function class($code)
    {
        //be sure that the user has subscribed 
        if(count(MyTutorial::where('tut_code', '=', $code)->get()) == 0)
        {
            $isBought = false;
        }
        else
        {
            $isBought = true;
        }

        //get the tutorials 
        $tutorial = Tutorial::where('code', '=', $code)->first();

        //get the first chapter of the course content
        $content = TutorialContent::where('tutorial_id', '=', $tutorial->id)->first();

        //send progress to as a percentgage 1-100 
        $contents = $tutorial->content;
        $watchedContents = $this->getWatchedContents($tutorial);
        

        $progress = ceil( (count($watchedContents) / count($contents)) * 100 );


        //add this to the list of watched tutorials 
        $this->addWatched($tutorial, $content);


        return view('tuts.class', compact('isBought', 'tutorial', 'content', 'progress'));
    }

    public function content($tutorial_code, $content_id)
    {
        if(count(MyTutorial::where('tut_code', '=', $tutorial_code)->get()) == 0)
        {
            $isBought = false;
        }
        else
        {
            $isBought = true;
        }

        //get the tutorials 
        $tutorial = Tutorial::where('code', '=', $tutorial_code)->first();

        //get the first chapter of the course content
        $content = TutorialContent::find($content_id);

        //send progress to as a percentgage 1-100 
        $contents = $tutorial->content;
        $watchedContents = $this->getWatchedContents($tutorial);
        

        $progress = ceil( (count($watchedContents) / count($contents)) * 100 );


        //add this to the list of watched tutorials 
        $this->addWatched($tutorial, $content);


        return view('tuts.class', compact('isBought', 'tutorial', 'content', 'progress'));
    }

    private function addWatched($tutorial, $content)
    {
        //try and see if it has been watched 
        $user = Functions::getUser();
        $watched = WatchedTutorial::where('tutorial_id', '=', $tutorial->id)
                                    ->where('content_id', '=', $content->id)
                                    ->where('user_id', '=', $user->user_id)
                                    ->first();

        if($watched == null)
        {
            //this user has not watched this before
            $watched = new WatchedTutorial;
            $watched->user_id = $user->user_id;
            $watched->tutorial_id = $tutorial->id;
            $watched->content_id = $content->id;

            //save it 
            $watched->save();
        }
        else 
        {
            //it has been watched before. so increase the number of watches 
            $watched->increaseWatchTimes();
        }
    }

    private function getWatchedContents($tutorial)
    {
        $user = Functions::getUser();

        return WatchedTutorial::where('tutorial_id', '=', $tutorial->id)
                                    ->where('user_id', '=', $user->user_id)
                                    ->get();
    }
}
