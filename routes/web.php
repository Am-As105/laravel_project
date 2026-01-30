<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;





Route::get('/', [DashController::class, 'dashboard']);

 

// Route::get('/contact ', [ContactController::class ,'Contact']);

Route::get('/groups', [GroupController::class , 'page']);
Route::post('/groups', [GroupController::class , 'create']);
Route::get('/groups', [GroupController::class , 'read']);

Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('contacts/{contact}', [ContactController::class , 'destroy']);