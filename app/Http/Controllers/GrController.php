<?php

namespace App\Http\Controllers;

use App\Gr;
use Illuminate\Http\Request;

class GrController extends Controller
{
    public function getList(){
        return view('schedule-list', ['data' => Gr::List(), 'type' => 'Список груп']);
    }
    public function getGroupInfoName(Request $req){
        $name = $req->input('name');

        $id_caf = Gr::where('name', 'like', "%$name%")->get()[0]['id'];
        $caf = Gr::find($id_caf);
        return view('group-info', ['lectures' => $caf->lectures, 'type' => 'Інформація про '.$caf->name]);

    }

    public function getGroupInfoID($id){
        $caf = Gr::find($id);
        return view('group-info', ['lectures' => $caf->lectures, 'type' => 'Інформація про '.$caf->name]);

    }
}
