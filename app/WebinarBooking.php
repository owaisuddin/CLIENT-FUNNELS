<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarBooking extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'name', 'email','country_code','mobile','call_slot'
    ];

    public function WebinarBooking(){
        return $this->belongsTo('App\Campaigns','campaign_id','id');
    }
}
