<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-name',[InvoiceController::class, 'jsonResponse']);

Route::get('index',[InvoiceController::class, 'index']);
Route::post('store',[InvoiceController::class, 'store']);
Route::get('show/{id}',[InvoiceController::class, 'show_record']);
Route::put('update/{id}',[InvoiceController::class, 'update']);
Route::delete('destroy/{id}',[InvoiceController::class, 'destroy']);

Route::apiResource('users',UserController::class);
Route::apiResource('tasks',TaskController::class);


