<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController; // Import controller

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

Route::get('/', [TodoListController::class, 'index']);

//          concats in URL | Controller     | Controller function  | alias for call
Route::post('/saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
