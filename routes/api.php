<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/sensor', function (Request $request) {
    return 'CIAO';
});

Route::post('/humidity', function (Request $request) {
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});