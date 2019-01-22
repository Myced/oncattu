<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyTutorial extends Model
{
    public function Tutor()
    {
    	$tutorial = $this->Tutorial();

    	return \App\User::find($tutorial->teacher_id);
    }

    public function Tutorial()
    {
    	return \App\Tutorial::where('code', '=', $this->tut_code)->first();
    }

}
