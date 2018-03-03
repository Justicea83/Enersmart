<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    public function round(){
    	return $this->belongsTo('App\Round');
    }
}
