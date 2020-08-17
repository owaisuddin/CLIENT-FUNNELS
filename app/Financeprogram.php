<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financeprogram extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'name','currency','price','recurring_payment','recurring_every','recurring_tenure','contracts','notes'
    ];
}
