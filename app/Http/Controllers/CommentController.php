<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\comment;
use App\lesson;
session_start();

class CommentController extends Controller
{
    public function postComment($id,Request $request)
    {
        $idTinTuc =$id;
        $lesson = lesson::find($id);
        $comment = new Comment();
        $comment->id_lesson= $idlesson;
        $comment->id_user= $_SESSION['user']->id;
        $comment->comment= $request->NoiDung;
        $comment->save();
        
        return redirect("tintuc/$id/".$tintuc->TieuDeKhongDau.".html")
        ->with('thongbao','Viết bình luận thành công');
    }
}