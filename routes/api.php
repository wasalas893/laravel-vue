<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',[PostsController::class,'Posts']);

Route::post('/posts/add',[PostsController::class,'CreatePost']);

Route::get('/posts/edit/{id}',[PostsController::class,'EditPost']);

Route::post('/posts/update/{id}',[PostsController::class,'UpdatePost']);

Route::delete('/posts/delete/{id}',[PostsController::class,'DeletePost']);
