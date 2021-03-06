<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarHolding extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'title', 'subheading','schedule_text','event_begin_text','preview_video_id'
    ];
}
