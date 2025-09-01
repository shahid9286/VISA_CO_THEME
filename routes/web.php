<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CountryController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/index2', [FrontController::class, 'index2'])->name('front.index2');
Route::get('/about3', [FrontController::class, 'about3'])->name('front.about3');



