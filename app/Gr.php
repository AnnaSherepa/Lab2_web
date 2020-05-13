<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gr extends Model
{
    public function scopeList(){
        return Gr::select('*')->get();
    }

    public function lectures(){
        return $this->belongsToMany('App\Lecture', 'gr__lectures');
    }
}
