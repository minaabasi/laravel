<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BlogcatController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ForgetPasswordController;
use App\Http\Controllers\admin\ProductCatController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
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

//register route
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'store'])->name('register.store');

//login route
Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'loginPost'])->name('login.post');

//logout route
Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

//forget password route
Route::get('/forgetpassword' , [ForgetPasswordController::class , 'forgetpassword'])->name('forgetpassword');
Route::post('/forgetpassword' , [ForgetPasswordController::class , 'forgetpasswordPost'])->name('forgetpassword.post');

//reset password route
Route::get('/resetpassword/{token}' , [ForgetPasswordController::class , 'resetpassword'])->name('resetpassword');
Route::post('/resetpassword' , [ForgetPasswordController::class , 'resetpasswordPost'])->name('resetpassword.post');


//admin blog
Route::group(['middleware' => ['auth:web'],'prefix' => 'admin/blog'] , function(){
    Route::get('/list' , [BlogController::class , 'list'])->name('admin.blog.list');
    Route::get('/create' , [BlogController::class , 'create'])->name('admin.blog.create');
    Route::post('/store' , [BlogController::class , 'store'])->name('admin.blog.store');
    Route::get('/edit/{blog}' , [BlogController::class , 'edit'])->name('admin.blog.edit');
    Route::put('/edit/{blog}' , [BlogController::class , 'update'])->name('admin.blog.update');
    Route::delete('/delete/{blog}' , [BlogController::class , 'destroy'])->name('blog.destroy');
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
    Route::get('/list' , [ProductController::class , 'index'])->name('product.list');
    Route::get('/create' , [ProductController::class , 'create'])->name('product.create');
    Route::post('/store' , [ProductController::class , 'store'])->name('product.store');
    Route::get('/edit/{product}' , [ProductController::class , 'edit'])->name('product.edit');
    Route::put('/update/{product}' , [ProductController::class , 'update'])->name('product.update');
    Route::delete('/destroy/{product}' , [ProductController::class , 'destroy'])->name('product.destroy');
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

// admin profile
Route::get('/admin/profile/{id}' , [ProfileController::class , 'index'])->middleware('auth')->name('profile.index');    


//admin product
Route::group(['prefix' => 'admin/productcat'] , function(){
    Route::get('/list' , [ProductCatController::class , 'index'])->name('productcat.list');
    Route::get('/create' , [ProductCatController::class , 'create'])->name('productcat.create');
    Route::post('/store' , [ProductCatController::class , 'store'])->name('productcat.store');
    Route::get('/edit/{productcat}' , [ProductCatController::class , 'show'])->name('productcat.show');
    Route::put('/update/{productcat}' , [ProductCatController::class , 'update'])->name('productcat.update');
    Route::delete('/destroy/{productcat}' , [ProductCatController::class , 'destroy'])->name('productcat.destroy');
});


//admin roles
Route::group(['prefix' => 'admin/role'] , function(){
    Route::get('/' , [RoleController::class , 'index'])->name('roles.list');
    Route::get('/create' , [RoleController::class , 'create'])->name('role.create');
    Route::post('/store' , [RoleController::class , 'store'])->name('role.store');
    Route::get('/show/{role}' , [RoleController::class , 'show'])->name('role.show');
    Route::put('/update/{role}' , [RoleController::class , 'update'])->name('role.update');
    Route::delete('/destroy/{role}' , [RoleController::class , 'destroy'])->name('role.destroy');
});
