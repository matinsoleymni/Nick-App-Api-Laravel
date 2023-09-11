<?php

use App\Models\Careers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix("/careers")->group(function(){
    Route::get("/" , function(){
        return Careers::all();
    });
});
