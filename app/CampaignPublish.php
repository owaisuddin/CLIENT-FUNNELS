<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignPublish extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'campaign_name', 'campaign_status', 'campaign_notes'
    ];
}
