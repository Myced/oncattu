<?php

namespace App;

use App\PrepContent;
use Illuminate\Database\Eloquent\Model;

class Prep extends Model
{
    public function content()
    {
        return $this->hasMany(PrepContent::class);
    }
}
