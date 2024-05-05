<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/sensor', function (Request $request) {
    return 'CIAO';
});

Route::post('/humidity', function (Request $request) {
    
});