<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
