<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Comic extends Model
{
    public function author() {

        return $this->belongsTo('App\Author');

    }
}
