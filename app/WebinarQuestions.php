<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebinarQuestions extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id', 'questions', 'answers','webinar_info'
    ];
}
