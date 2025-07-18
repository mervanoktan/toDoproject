<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoriController;
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
// tasks end

//kategoriler starts
Route::get('/panel/categories/index',[CategoriController::class,'index'])->name('panel.categories');
Route::get('/panel/categories/create',[CategoriController::class,'createPage'])->name('panel.categoriesCreatePage');
Route::post('/panel/categories/addCategory',[CategoriController::class,'postCategory'])->name('panel.categoryAdd');
Route::get('/panel/categories/update/{id}',[CategoriController::class,'updatePage'])->name('panel.categoriesUpdatePage');
Route::post(url('/panel/category/updatePost'),[CategoriController::class,'updateCategory'])->name('panel.updateCategory');
Route::get(url('/panel/categories/delete/{id}'),[CategoriController::class,'deleteCategory'])->name('panel.deleteCategory');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
