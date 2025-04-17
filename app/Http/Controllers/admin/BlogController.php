<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
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
        $request->validate([
            'title'=> 'required',
        ]);
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

    public function update(Blog $blog , Request $request){
        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'url'=>$request->url
        ]);

        return redirect()->route('admin.blog.list');
    }

    public function destroy(Blog $blog){
        $blog->delete();
        return redirect()->route('admin.blog.list');
    }
}
