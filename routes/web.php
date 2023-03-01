<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserDetailController;

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

//Route::get('/', function () {return view('welcome');});

Route::get('/HomeIndex', [HomeController::class, 'index'])->name('home');
Route::resource('/TodoIndex', TodoController::class)->names([
    'index' => 'todo.index',
    'store' => 'todo.store',
    'create' => 'todo.new',
    'show' => 'todo.view',
    'destroy' => 'todo.drop',
    'edit' => 'todo.modify',
    'update'=> 'todo.update',
]);
Route::get('/TodoIndex/done/{task}',[TodoController::class,'done'])->name('done');
Route::get('/TodoIndex/not_done/{task}',[TodoController::class,'not_done'])->name('not_done');

Route::get('/',function(){return view('pages.login.userDataEnter');})->name('register');
Route::get('/login', [UserDetailController::class, 'index']);
Route::resource('/User', UserDetailController::class)->names([
    'index'=>'users.index',
    'store'=>'users.store',
    'create'=>'users.create',
    'show'=>'users.show',
    'destroy'=>'users.destroy',
    'edit'=>'users.edit',
    'update'=>'users.update',
]);
Route::post('/login/check',[UserDetailController::class, 'check'])->name('users.loginCheck');
Route::get('/login/logout',[UserDetailController::class, 'logout'])->name('users.logout');

