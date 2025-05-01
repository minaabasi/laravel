<?php

use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CommentController as FrontendCommentController;
use App\Http\Controllers\frontend\HomeController;
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




//main route
Route::get('/' ,[HomeController::class , 'index'] )->name('home');

//blog show
Route::get('/blog' , [BlogController::class , 'index'])->name('blog');
Route::get('/blog/show/{blog}' , [BlogController::class , 'show'])->name('blog.show');

//comment Route
Route::post('/comment/store' , [FrontendCommentController::class , 'store'])->name('user/comment/store');








//404 route
Route::fallback(function(){
    return "404";
});
