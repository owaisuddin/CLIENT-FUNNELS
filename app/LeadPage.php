<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadPage extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'title', 'subheading','training_start_text','learn_title','learn_list','presenter_image',
        'presenter_title','presenter_name','presenter_text'
    ];

}
