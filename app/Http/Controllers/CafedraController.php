<?php

namespace App\Http\Controllers;

use DemeterChain\C;
use ErrorException;
use Illuminate\Http\Request;
use App\Cafedra;
use Illuminate\Support\Collection;

class CafedraController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Cafedra::List(), 'type' => 'Список кафедр']);
    }

    public function getCafedraInfoName(Request $req){
        $name = $req->input('name');

        $id_caf = Cafedra::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Cafedra::find($id_caf);
        $lectures = $caf->lectures;
        $groups = [];
        foreach($lectures as $lecture){
            foreach ($lecture->groups as $group){
                $groups[] = $group;
            }
        }

        return view('cafedra-info', ['lectures' => $lectures, 'subjects' => $caf->subjects, 'groups' => array_unique($groups), 'type' => 'Інформація про кафедру '.$caf->name]);
    }

    public function getCafedraInfoID($id){
        $caf = Cafedra::find($id);
        $lectures = $caf->lectures;
        $groups = new Collection([]);
        $groups = [];
        foreach($lectures as $lecture){
            foreach ($lecture->groups as $group){
                $groups[] = $group;
            }
        }

        return view('cafedra-info', ['lectures' => $lectures, 'subjects' => $caf->subjects, 'groups' => array_unique($groups), 'type' => 'Інформація про кафедру '.$caf->name]);
    }
}
