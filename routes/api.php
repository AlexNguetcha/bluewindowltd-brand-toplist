<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;


Route::get('brands/toplist', [BrandController::class, 'getToplist']);
Route::apiResource('brands', BrandController::class);
