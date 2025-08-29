<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;





// Frontend routes

Route::get('/', [FrontController::class, 'index'])->name('front.index');
















