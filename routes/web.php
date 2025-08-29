<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CountryController;


Route::get('/', [FrontController::class, 'index'])->name('front.index');


Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

Route::get('/county/create', [CountryController::class, 'create'])->name('admin.country.create');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
 Route::post('country', [CountryController::class, 'store'])->name('admin.country.store');
