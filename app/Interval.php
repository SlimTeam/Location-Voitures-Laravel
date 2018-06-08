<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{

    public function offer(){
        return $this->belongsTo('App\Offer');
    }

    public $table='offer_intervals';
}
