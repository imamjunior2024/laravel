<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\KosanController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PembobotanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::resource('kosans', KosanController::class);
Route::resource('kriterias', KriteriaController::class);
Route::resource('pembobotans', PembobotanController::class);
Route::resource('hasils', HasilController::class);