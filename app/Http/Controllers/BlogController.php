<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        $blogs=Blog::all();
        return view('dashboard.blog.list' , [
            'blogs'=>$blogs
        ]);
    }

    public function create(){
        return view('dashboard.blog.create');
    }

    public function store(Request $request){
        Blog::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'url'=>$request->url
        ]);

        return redirect('/admin/blog/list');
    }

    public function edit(Blog $blog){
        return view('dashboard.blog.edit' , [
            'blog'=>$blog
        ]);
    }
}
