<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('clients', ClientsController::class);
Route::resource('product', ProductController::class);





