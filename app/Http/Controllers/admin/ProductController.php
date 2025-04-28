<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        return view('dashboard.product.create');
    }

    public function list(){
        $products=Product::all();
        return view('dashboard.product.list' , compact('products'));
    }

    public function edit(){
        return view('dashboard.product.edit');
    }
}
