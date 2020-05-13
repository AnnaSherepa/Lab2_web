<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Lecture::List(), 'type' => 'Список викладачів']);
    }

    public function getLectureInfoName(Request $req){
        $name = $req->input('name');
        $id_caf = Lecture::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Lecture::find($id_caf);
        return view('lecture-info', ['data' => $caf->cafedra,'sub'=> $caf->subject,'groups'=> $caf->groups, 'type' => 'Інформація про '.$caf->name]);
    }

    public function getLectureInfoID($id){
        $caf = Lecture::find($id);
        return view('lecture-info', ['data' => $caf->cafedra,'sub'=> $caf->subject,'groups'=> $caf->groups, 'type' => 'Інформація про '.$caf->name]);
    }
}
