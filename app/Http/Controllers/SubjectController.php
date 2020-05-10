<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Subject::List(), 'type' => 'Список кафедр']);
    }

    public function getSubjectInfo(Request $req){
        $name = $req->input('name');
        $id_caf = Subject::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Subject::find($id_caf);
        return view('subject-info', ['data' => $caf->lecture,'caf' => $caf->lecture->cafedra, 'type' => 'Інформація про '.$caf->name]);
    }
}
