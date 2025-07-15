<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//test  routes
Route::get('/testtemple', function () {
    return view('panel.layout.app');
});

//tasks rotaları
Route::get('/tasks/create',[TaskController::class,'createPage'])->name('panel.CreateTasksPage');
Route::post('/tasks/add',[TaskController::class,'addTask'])->name('panel.addTask');
