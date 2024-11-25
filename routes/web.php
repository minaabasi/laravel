<?php

use App\Http\Controllers\BlogcatController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin route

Route::get('/admin', function () {
    return view('dashboard.dashboard');
});

Route::get('/admin/register' , function () {
    return view('dashboard.register');
});

Route::get('/admin/login' , function () {
    return view('dashboard.login');
});


//admin blog
Route::get('/admin/blog' , [BlogController::class , 'list']);
Route::get('/admin/blog/list' , [BlogController::class , 'list']);
Route::get('/admin/blog/create' , [BlogController::class , 'create']);
Route::post('/admin/blog/store' , [BlogController::class , 'store']);
Route::get('/admin/blog/edit/{blog}' , [BlogController::class , 'edit']);


//admin blogcat
Route::get('/admin/blogcat' , [BlogcatController::class , 'list']);
Route::get('/admin/blogcat/list' , [BlogcatController::class , 'list']);
Route::get('/admin/blogcat/create' , [BlogcatController::class , 'create']);
Route::get('/admin/blogcat/edit' , [BlogcatController::class , 'edit']);

//admin product
Route::get('/admin/product' , [ProductController::class , 'list']);
Route::get('/admin/product/list' , [ProductController::class , 'list']);
Route::get('/admin/product/create' , [ProductController::class , 'create']);
Route::get('/admin/product/edit' , [ProductController::class , 'edit']);

//admin product
Route::get('/admin/productcat' , [ProductController::class , 'list']);
Route::get('/admin/productcat/list' , [ProductController::class , 'list']);
Route::get('/admin/productcat/create' , [ProductController::class , 'create']);
Route::get('/admin/productcat/edit' , [ProductController::class , 'edit']);


Route::get('/' ,function () {
    return view('main.index');
} );
 