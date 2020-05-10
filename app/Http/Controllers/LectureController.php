<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Lecture::List(), 'type' => 'Список кафедр']);
    }

    public function getLectureList(Request $req){
        $name = $req->input('name');

        $id_caf = Lecture::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Lecture::find($id_caf);
        return view('lecture-info', ['data' => $caf->cafedra,'sub'=> $caf->subject,'groups'=> $caf->groups, 'type' => 'Інформація про '.$caf->name]);

    }
}
