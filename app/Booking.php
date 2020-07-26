<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id','title', 'helper', 'mobile_required'
    ];
}
