<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $blogs=Blog::latest()->take(3)->get();

        return view('frontend.index' , compact('blogs'));
    }
}
