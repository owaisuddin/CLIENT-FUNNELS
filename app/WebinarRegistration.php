<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarRegistration extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'first_name', 'email','stage','webinar_watched','booked_call'
    ];
}
