<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarVideos extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'videos'
    ];
}
