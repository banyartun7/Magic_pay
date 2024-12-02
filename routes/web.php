<?php

use App\Http\Controllers\Frontend\pageController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [pageController::class, 'home']);