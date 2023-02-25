<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HomeIndex', [HomeController::class, 'index'])->name('home');
Route::resource('/TodoIndex', TodoController::class)->names([
    'index' => 'todo.index',
    'store' => 'todo.add',
    'create' => 'todo.new',
    'show' => 'todo.view',
    'destroy' => 'todo.drop',
    'edit' => 'todo.modify',
    'done' => 'todo.change',
]);
Route::post('/TodoIndex/done',[SandasController::class,'done'])->name('done');

