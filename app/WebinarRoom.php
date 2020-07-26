<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarRoom extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'on', 'minutes','seconds'
    ];
}
