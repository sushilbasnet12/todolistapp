<?php

use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [TodoListController::class,'index'])->name("todo.home");


Route::get('/create', function () {
    return view('layout/create');
})->name("create");

Route::get('/update', function () {
    return view('layout/update');
});

// create todo route
// Route::post('/create', [TodoListController::class, 'store'])->name("todo.store");
 
Route::resource('todolist', TodoListController::class);

// Route::delete('/destroy/{id}', [TodoListController::class, 'destroy'])->name("todo.destroy");
