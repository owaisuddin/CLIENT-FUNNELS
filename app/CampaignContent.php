<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignContent extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'webinar_video_id'
    ];
}
