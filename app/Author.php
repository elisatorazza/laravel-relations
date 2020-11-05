<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AuthorInfo;
use App\Comic;

class Author extends Model
{
    public function info() {
        
        return $this->hasOne('App\AuthorInfo');
    }

    public function comics() {
        
        return $this->hasMany('App\Author');
    }
}
