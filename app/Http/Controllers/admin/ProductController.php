<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function create(){
        return view('dashboard.product.create');
    }

    public function list(){
        return view('dashboard.product.list');
    }

    public function edit(){
        return view('dashboard.product.edit');
    }
}
