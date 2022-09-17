<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


//vue routes
Route::any('/', function () {
    return view('main');
});
Route::any('/review', function () {
    return view('main');
});


// backend routes
Route::group(['middleware'=>['auth:sanctum', 'verified']],function(){

    Route::get('/dashboard',[DashboardController::class,'Dashboard']);

    Route::get('/logout', [DashboardController::class, 'Logout'])->name('user.logout');

    Route::get('/category/all',[CategoryController::class,'all'])->name('category.all');
    Route::get('/category/add',[CategoryController::class,'add'])->name('category.add');
    Route::post('/category/create',[CategoryController::class,'create'])->name('category.create');


});
