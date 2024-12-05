<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware('auth:admin_user')->group(function () {
    Route::get('/',function(){
        return 'admin page';
    });
});
