<?php

namespace App;

use App\TutorialContent;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public function content()
    {
        return $this->hasMany('App\TutorialContent');
    }

    public function teacher()
    {
        return $this->belongsTo('App\User');
    }
}
