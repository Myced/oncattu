<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorialContent extends Model
{
    public function tutorial()
    {
    	return \App\Tutorial::where('id', '=', $this->tutorial_id)->first();
    }

    public function isWatched()
    {
    	$user = \App\Functions::getUser();
    	$tutorial = $this->tutorial();

    	$watched = \App\WatchedTutorial::where('user_id', '=', $user->user_id)
    									->where('tutorial_id', '=', $tutorial->id)
    									->where('content_id', '=', $this->id)
    									->get();

    	if(count($watched) == 0)
    	{
    		return false;
    	}

    	return true;
    }

    public function getNext()
    {
        $next = $this->where('id', '>', $this->id)
                        ->where('tutorial_id', '=', $this->tutorial()->id)
                        ->first();

        return $next;
    }

    public function getPrev()
    {
        $prev = $this->where('id', '<', $this->id)
                        ->where('tutorial_id', '=', $this->tutorial()->id)
                        ->orderBy('id', 'desc')
                        ->first();

        return $prev;
    }
}
