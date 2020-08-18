<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarVideos extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'videos','duration','created_by'
    ];

    public function webinarVideo(){
        return $this->hasMany('App\Campaigns','webinar_video','videos');
    }
}
