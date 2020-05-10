<?php

namespace App\Http\Controllers;

use ErrorException;
use Illuminate\Http\Request;
use App\Cafedra;

class CafedraController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Cafedra::List(), 'type' => 'Список кафедр']);
    }

    public function getLectureList(Request $req){
        $name = $req->input('name');

        $id_caf = Cafedra::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Cafedra::find($id_caf);
        $lectures = $caf->lectures;
        $groups = [];
        foreach($lectures as $lecture){
            foreach ($lecture->groups as $group){
                $groups[] = $group['name'];
            }
        }
        return view('cafedra-info', ['lectures' => $lectures, 'subjects' => $caf->subjects, 'groups' => array_unique($groups), 'type' => 'Інформація про кафедру '.$caf->name]);

    }
}
