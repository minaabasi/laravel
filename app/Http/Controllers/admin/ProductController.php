<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;

class ProductController extends Controller
{
    

    public function index(){
        $products=Product::all();
        return view('dashboard.product.list' , compact('products'));
    }

    public function create(){
        return view('dashboard.product.create');
    }

    public function store(ProductRequest $request){

        Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
        ]);

        return redirect()->route('product.list');
    }

    public function edit(){
        return view('dashboard.product.edit');
    }
}
