<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class webinarCallSlot extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'name', 'email','country_code','mobile','call_slot'
    ];
}
