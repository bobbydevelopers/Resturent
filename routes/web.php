<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;





Route::get('/',[HomeController::class,'index']);
Route::get('/redirect',[HomeController::class,'redirect']);




Route::get('/user',[AdminController::class,'show_user']);
Route::get('/delete/{id}',[AdminController::class,'delete_user']);
Route::get('/search',[AdminController::class,'search_user']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
