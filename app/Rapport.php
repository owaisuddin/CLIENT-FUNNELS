<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'text', 'title', 'subheading', 'indoctrination_video_id', 'display', 'option', 'link'
    ];
}
