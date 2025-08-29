<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CountryController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');



