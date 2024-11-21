<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PurchaseController;
use App\http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('invoices', function () {     // URL views
  //  return view('invoices');            // blade will show on screen 


//});

Route::get('invoices', [InvoiceController::class, 'show']);
Route::get('invoices-create', [InvoiceController::class, 'create']);

