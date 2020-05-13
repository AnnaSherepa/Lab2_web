<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafedra extends Model
{
    public function scopeList(){
        return Cafedra::select('*')->get();
    }

    public function lectures(){
        return $this->hasMany('App\Lecture');
    }

    public function subjects(){
        return $this->hasManyThrough('App\Subject','App\Lecture');
    }

}
