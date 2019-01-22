<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchedTutorial extends Model
{
    public function increaseWatchTimes()
    {
    	$times = $this->no_times; 

    	++$times;

    	$this->no_times = $times;

    	$this->save();
    }
}
