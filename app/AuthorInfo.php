<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class AuthorInfo extends Model
{
    protected $table = "author_info";

    public function author() {

        return $this->belongsTo('App\Author');

    }
}
