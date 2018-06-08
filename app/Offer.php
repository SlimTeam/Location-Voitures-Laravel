<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = true;

    public function intervals(){
        return $this->hasMany('App\Interval');
    }
}
