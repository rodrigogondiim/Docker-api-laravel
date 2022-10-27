<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ParticipantController, ProductController};

Route::get('', function(){
    return 'Okay, api is working!';
});

Route::prefix('participant')->controller(ParticipantController::class)->group(function(){
    Route::get('', 'index');
    Route::post('', 'store');
    Route::put('{participant}', 'update');
    Route::delete('{participant}', 'destroy');
});

Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('', 'index');
    Route::get('{product}', 'show');
    Route::post('', 'store');
    Route::post('{product}', 'update');
    Route::delete('{product}', 'destroy');
});