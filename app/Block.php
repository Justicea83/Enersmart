<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function rounds(){
        return $this->hasMany('App\Round');
    }

    public function district(){
    	return $this->belongsTo('App\District');
    }
}
