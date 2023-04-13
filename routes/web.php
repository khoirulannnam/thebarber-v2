<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/book',[HomeController::class,'book']);
Route::get('/add_team_view',[AdminController::class,'addview']);
Route::post('/upload_team',[AdminController::class,'upload']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/showteam',[AdminController::class,'showteam']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancel/{id}',[AdminController::class,'cancel']);
Route::get('/deleteteam/{id}',[AdminController::class,'deleteteam']);
Route::get('/updateteam/{id}',[AdminController::class,'updateteam']);
Route::post('/uploadupdate/{id}',[AdminController::class,'uploadupdate']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/print/{id}',[HomeController::class,'print']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
