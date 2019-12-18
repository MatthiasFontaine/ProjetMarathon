<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\episode;
use App\Models\comments;
class MainController extends Controller
{
    public function index() {

        $series= series::all();
        return view('index',['series' => $series]);
    }


    public function find(Request $request,$id ){
        $action = $request->query('action', 'index');
        $episodes= episode::All()->where('serie_id',$id);
        return view("episode",['episodes'=>$episodes]);
    }

    public function comments($id) {
        $comments = comments::all()->where('serie_id',$id);;
        return view('comments', ['comments' => $comments]);
    }



}
