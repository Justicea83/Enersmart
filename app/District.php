<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function blocks(){
        return $this->hasMany('App\Block');
    }

    public function region(){
    	return $this->belongsTo('App\Region');
    }
}
