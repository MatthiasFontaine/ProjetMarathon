<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\episodes;
use App\Models\series;

class MainController extends Controller
{
    public function find(Request $request,$id ){

        $action = $request->query('action', 'index');
        $episodes= episodes::All()->where('serie_id',$id);
        return view("index",['episodes'=>$episodes]);
    }
}
