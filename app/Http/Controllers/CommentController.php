<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller{
    public function submit(Request $req){
        $val =$req->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required'
            ]
        );

        $comment = new Comment();
        $comment->name = $req->input('name');
        $comment->email = $req->input('email');
        $comment->subject = $req->input('subject');
        $comment->message = $req->input('message');

        $comment->save();//extends from Model;
        return redirect()->route('comments')->with('success', 'Повідомлення додано');
    }

    public function allData(){
        return view('comments', ['data' => Comment::all()]);
    }

    public function oneComment($id){
        $comment = new Comment();
        return view('one-comment', ['data' => $comment->find($id)]);
    }
    public function updateComment($id){
        $comment = new Comment();
        return view('update-comment', ['data' => $comment->find($id)]);
    }

    public function updateCommentSubmit($id, Request $req){
        $val =$req->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required'
            ]
        );

        $comment = Comment::find($id);
        $comment->name = $req->input('name');
        $comment->email = $req->input('email');
        $comment->subject = $req->input('subject');
        $comment->message = $req->input('message');
        $comment->save();//extends from Model;
        return redirect()->route('comments')->with('success', 'Повідомлення оновлено');
    }

    public function deleteComment($id){
        Comment::find($id)->delete();
        return redirect()->route('comments')->with('success', 'Повідомлення видалено');

    }
}
