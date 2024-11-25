<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function res_com_page(){
        $comments = Comment::all();
        return view('financial_panel.resComments', ['comments'=>$comments]);
    }

    public function res_com($id){
        $comment = Comment::find($id);
        return view('financial_panel.commentSingle', ['comment'=>$comment, 'id'=>$id]);
        dd($comment);
    }
    
    public function responder(Request $request, $id){
        $comment = Comment::find($id);

        $data = $request->validate([
            'answer' => 'required|string'
        ]);

        Answer::create([
            'comment_id' => $comment['id'],
            'answer' => $data['answer']
        ]);

        $comment->update(['status'=>'respondido']);

        return redirect()->route('comentarios');
    }
}
