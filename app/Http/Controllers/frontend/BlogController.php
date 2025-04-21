<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('frontend.blog.index' , compact('blogs'));
    }

    public function show(Request $request , Blog $blog){
        $comments=Comment::find($blog);
        return view('frontend.blog.show' , compact('blog' , 'comments'));
    }
}
