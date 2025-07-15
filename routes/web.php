<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//test  routes
Route::get('/testtemple', function () {
    return view('panel.layout.app');
});

