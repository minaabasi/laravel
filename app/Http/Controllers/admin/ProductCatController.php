<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Productcat;
use Illuminate\Http\Request;

class ProductCatController extends Controller
{
    public function index(){
        $productcat=Productcat::all();
        return view('dashboard.productcat.list' , compact('productcat'));
    }

    public function create(){
        return view('dashboard.productcat.create');
    }

    public function store(){

    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){}
}

