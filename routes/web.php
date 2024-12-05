<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\pageController;
use App\Http\Controllers\Auth\AdminUserController;
//User auth
Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\pageController::class, 'home']);

//Admin auth
Route::get('/admin/login', [AdminUserController::class, 'Showlogin']);
Route::post('/admin/login', [AdminUserController::class, 'login']
)->name('admin.login');

Route::prefix('/admin')->name('admin.')->middleware('auth:admin_user')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\pageController::class, 'home'])->name('home');
});