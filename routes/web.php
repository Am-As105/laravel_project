<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;





Route::get('/', [DashController::class, 'dashboard']);

 

// Route::get('/contact ', [ContactController::class ,'Contact']);

// Route::get('/groups', [GroupController::class , 'page']);
// Route::post('/groups', [GroupController::class , 'create']);
// Route::get('/groups', [GroupController::class , 'read']);


Route::get('/groups', [GroupController::class, 'index']);
Route::post('/groups', [GroupController::class, 'create']);

Route::get('/groups/{group}/edit', [GroupController::class, 'edit']);
Route::put('/groups/{group}', [GroupController::class, 'update']);
Route::delete('/groups/{group}', [GroupController::class, 'destroy']);

Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('contacts/{contact}', [ContactController::class , 'destroy']);