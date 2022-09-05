<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;


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


});
