<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyBook extends Model
{
    public function book()
    {
    	return \App\Book::find($this->book_id);
    }
}
