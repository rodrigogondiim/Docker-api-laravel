<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Okay, we\'re working!';
});

Route::get('image/{file}', function($file){
    return response()->file(storage_path("app/public/products/". $file));
});