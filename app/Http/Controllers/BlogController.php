<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(){
        return view('dashboard.blog.list');
    }

    public function create(){
        return view('dashboard.blog.create');
    }
}
