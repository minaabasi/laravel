<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogcatController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/admin', [UserController::class , 'index'])->name('admin');



Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'store'])->name('register.store');


Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'loginPost'])->name('login.post');

Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

//admin blog
Route::group(['middleware' => ['auth:web'],'prefix' => 'admin/blog'] , function(){
    Route::get('/' , [BlogController::class , 'list']);
    Route::get('/list' , [BlogController::class , 'list']);
    Route::get('/create' , [BlogController::class , 'create']);
    Route::post('/store' , [BlogController::class , 'store']);
    Route::get('/edit/{blog}' , [BlogController::class , 'edit']);
});


//admin blogcat
Route::group(['middleware' => ['auth:web'] ,'prefix' => 'admin/blogcat'], function(){
    Route::get('/' , [BlogcatController::class , 'list']);
    Route::get('/list' , [BlogcatController::class , 'list']);
    Route::get('/create' , [BlogcatController::class , 'create']);
    Route::get('/edit' , [BlogcatController::class , 'edit']);
});

//admin product
Route::group(['middleware' => ['auth:web'] ,'prefix' => 'admin/product'] , function(){
    Route::get('/' , [ProductController::class , 'list']);
    Route::get('/list' , [ProductController::class , 'list']);
    Route::get('/create' , [ProductController::class , 'create']);
    Route::get('/edit' , [ProductController::class , 'edit']);
});


// admin Users

Route::group(['middleware'=>['auth:web'],'prefix'=>'admin/user'],function(){
    Route::get('/' , [UserController::class , 'list'])->name('users.list');
    Route::get('/create' , [UserController::class , 'create'])->name('users.create');
    Route::post('/store' , [UserController::class , 'store'])->name('users.store');
    Route::get('/show/{user}' , [UserController::class , 'show'])->name('users.show');
    Route::put('/update/{user}' , [UserController::class , 'update'])->name('users.update');
    Route::delete('/delete/{user}' , [UserController::class , 'destroy'])->name('users.destroy');
});




 


//admin product
Route::group(['prefix' => 'admin/productcat'] , function(){
    Route::get('/' , [ProductController::class , 'list']);
    Route::get('/list' , [ProductController::class , 'list']);
    Route::get('/create' , [ProductController::class , 'create']);
    Route::get('/edit' , [ProductController::class , 'edit']);
});



Route::get('/' ,function () {
    return view('main.index');
} );
 




Route::fallback(function(){
    return "404";
});