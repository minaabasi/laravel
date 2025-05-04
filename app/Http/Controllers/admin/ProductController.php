<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

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

        
        

        $imagepath=$request->file('img')->store('images/product');

        $product=Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
        ]);

        $product->images()->create([
            'path'=>$imagepath
        ]);


        

        return redirect()->route('product.list');
    }

    public function edit(Product $product){
        return view('dashboard.product.edit' , compact('product'));
    }

    public function update(Request $request , Product $product){
        
        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
        ]);

        return redirect()->route('product.list');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.list');   
    }
}
