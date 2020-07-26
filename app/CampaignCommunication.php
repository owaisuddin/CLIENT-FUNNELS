<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignCommunication extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'emails', 'texts'
    ];
}
