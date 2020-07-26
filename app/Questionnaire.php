<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'campaign_id','title', 'description', 'questions'
    ];
}
