<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CountryController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/index2', [FrontController::class, 'index2'])->name('front.index2');
Route::get('/index3', [FrontController::class, 'index3'])->name('front.index3');
Route::get('/index4', [FrontController::class, 'index4'])->name('front.index4');
Route::get('/index5', [FrontController::class, 'index5'])->name('front.index5');



Route::get('/about3', [FrontController::class, 'about3'])->name('front.about3');
