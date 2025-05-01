<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('frontend.product.index' , compact('products'));
    }

    public function show(Product $product){
        return view('frontend.product.show' , compact('product'));
    }
}
