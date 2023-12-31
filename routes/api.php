<?php

use App\Models\Careers;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix("/careers")->group(function(){
    Route::get("/" , function(){
        return Careers::all();
    });
});

Route::prefix("/stores")->group(function(){
    Route::get("/" , function(){
        return Store::all();
    });
});

Route::prefix("/users")->group(function(){
    Route::get("/" , function(){
        return User::all();
    });
});

