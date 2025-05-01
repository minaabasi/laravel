<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        Comment::create([
            'comment'=>$request->comment,
            'commentable_type'=>$request->commentable_type,
            'commentable_id'=>$request->commentable_id,
            'status'=>$request->status
        ]);

        return redirect()->back();
    }
}
