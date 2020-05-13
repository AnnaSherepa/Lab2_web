<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function scopeList(){
        return Lecture::select('*')->get();
    }

    public function cafedra(){
        return $this->belongsTo('App\Cafedra');
    }

    public function subject(){
        return $this->hasOne('App\Subject');
    }
    public function groups(){
        return $this->belongsToMany('App\Gr', 'gr__lectures');
    }
}
