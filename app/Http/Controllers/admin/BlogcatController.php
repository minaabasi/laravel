<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class BlogcatController extends Controller
{
    public function list(){
        return view('dashboard.blogcat.list');
    }

    public function create(){
        return view('dashboard.blogcat.create');
    }

    public function edit(){
        return view('dashboard.blogcat.edit');
    }

}
