<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{

    public $timestamps = true;

    public function campaignLead(){
        return $this->belongsTo('App\LeadPage','id','campaign_id');
    }

    public function webinarRegistration(){
        return $this->hasMany('App\WebinarRegistration','campaign_id','id');
    }

    public function webinarBooking(){
        return $this->hasMany('App\WebinarBooking','campaign_id','id');
    }

    public function campaignPublish(){
        return $this->belongsTo('App\CampaignPublish','id','campaign_id');
    }
}
