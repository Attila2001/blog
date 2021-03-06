<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
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

Route::get('/', function () {
    return view('posts/home');
});

Route::get('/blog',[BlogPostController::class,'index']);
Route::get('/blog/{blogPost}',[BlogPostController::class,'show']);
Route::get('/blog/create/post',[BlogPostController::class, 'create']);
Route::post('/blog/create/post',[BlogPostController::class,'store']);
Route::get('/blog/{blogpost}/edit',[BlogPostController::class,'edit']);
Route::post('/blog/{blogpost}/edit',[BlogPostController::class,'update']);
Route::delete('/blog/{blogpost}',[BlogPostController::class,'remove']);