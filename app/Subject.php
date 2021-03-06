<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function scopeList(){
        return Subject::select('*')->get();
    }

    public function lecture(){
        return $this->belongsTo('App\Lecture');
    }
}
