<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function visitors()
    {
        return $this->hasMany('App\Model\VisitorRegistry');
    }
}
