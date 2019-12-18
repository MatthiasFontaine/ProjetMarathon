<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    public function create($idSerie) {
        $serie = Serie::find($idSerie);
        return view('comment.create', ["serie"=>$serie]);
    }


    public function store(Request $request) {
/*        $this->validate(
            $request,
            [
                'user_id' => 'required',
                'note' => 'required',
                'content'=>'requiered
            ]
        );*/
        Log::info("request: ".implode(",",$request->keys()));

        $commentaire= new comments();

        $commentaire->user_id = $request->user_id;
        $commentaire->note = $request->note;
        $commentaire->content = $request->description;

        Log::info("user_id : ".$commentaire->user_id);
        //$commentaires->save();

        return redirect('/comments');
    }
}