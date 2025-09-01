<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CountryController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/index2', [FrontController::class, 'index2'])->name('front.index2');
Route::get('/index3', [FrontController::class, 'index3'])->name('front.index3');
Route::get('/index4', [FrontController::class, 'index4'])->name('front.index4');



