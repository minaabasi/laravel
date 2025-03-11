<?php


use App\Http\Controllers\frontend\BlogController;
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
Route::get('/' ,function () {
    return view('frontend.index');
} );

//blog show
Route::get('/blog' , [BlogController::class , 'index'])->name('blog.index');










//404 route
Route::fallback(function(){
    return "404";
});
