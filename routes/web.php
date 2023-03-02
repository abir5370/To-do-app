<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[TodoController::class,'index'])->name('index');
Route::get('/create',[TodoController::class,'create'])->name('create');
Route::post('/store',[TodoController::class,'store'])->name('store');
Route::get('/details/{todo_id}',[TodoController::class,'details'])->name('details');
Route::get('/edit/{todo_id}',[TodoController::class,'edit'])->name('edit');
Route::post('/index/{todo_id}/update',[TodoController::class,'update'])->name('update');
Route::get('/index/{todo_id}/delete',[TodoController::class,'destroy'])->name('delete');
Route::get('/complete/{complete_id}',[TodoController::class,'complete'])->name('complete');
