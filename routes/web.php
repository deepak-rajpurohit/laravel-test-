<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('home');
});

Route::get('/user',[UserController::class,'getName']);

Route::get('/detail',[UserController::class,'details']);

Route::get('/user/{name}',[UserController::class,'getUserName']);

Route::get('/about',[UserController::class,'aboutIt']);

Route::get('/admin',[UserController::class,'adminLogin']);
Route::get('/home',[UserController::class,'getHome']);
Route::get('/page',[UserController::class,'getPage']);

Route::view('user-form','user-form');
Route::post('adduser',[UserController::class,'addUser']);

Route::view('/welcome','welcome');
Route::view('/home1','home1');
Route::view('/about1','about1');
Route::view('/home1/{name}','home1');
Route::view('/home2/profile/page', 'home2')->name('hm');
Route::view('/home2/profile/{name}', 'home2')->name('user1');


Route::get('/show',[HomeController::class,'show']);
Route::get('user1',[HomeController::class,'user1']);

//Routes Grouping here:-

Route::prefix('student/india')->group(function(){
    Route::view('/home3', 'home3');
Route::get('/show',[GroupController::class,'show']);
Route::get('/add',[GroupController::class,'add']);
});



Route::controller(StudentController::class)->group(function(){
Route::get('show1','show');
Route::get('add1','add');
Route::get('delete','delete');
});
