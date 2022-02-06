<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [ToDoController::class, 'index'])
    ->name('todo.index');

Route::post('/create', [ToDoController::class, 'store'])
    ->name('todo.create');

Route::get('/show/{toDo}', [ToDoController::class, 'show'])
    ->name('todo.show');

Route::get('/delete/{toDo}', [ToDoController::class, 'destroy'])
    ->name('todo.delete');

Route::get('/inprogress/{toDo}', [ToDoController::class, 'inprogress'])
    ->name('todo.inprogress');

Route::get('/finish/{toDo}', [ToDoController::class, 'finish'])
    ->name('todo.finish');

//Route::resource('todo', ToDoController)
