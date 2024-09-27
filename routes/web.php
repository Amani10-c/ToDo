<?php
use App\Http\Controllers\ToDoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('ToDo', [ToDoController::class, 'SignUp']);
Route::get('ToDo/Home', [ToDoController::class, 'Home']);
Route::get('ToDo/MyList', [ToDoController::class, 'MyList']);
Route::get('ToDo/create', [ToDoController::class, 'create']);
Route::post('ToDo/store', [ToDoController::class, 'store']);
Route::get('ToDo/{id}/edit', [ToDoController::class, 'edit']);
Route::post('ToDo/login', [ToDoController::class, 'login']);
Route::post('ToDo/save', [ToDoController::class, 'save']);
Route::delete('ToDo/{id}', [ToDoController::class, 'destroy']);
Route::put('ToDo/{id}', [ToDoController::class, 'update']);








