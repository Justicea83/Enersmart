<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function plots(){
        return $this->hasMany('App\Plot');
    }
}
