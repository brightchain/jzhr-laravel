<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisitorRegistry extends Model
{
    //
    protected $table = 'visitor_registry';

    protected $fillable = ['clicks'];

    public function posts()
    {
        return $this->belongsTo('App\Model\Post');
    }
}
