<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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

Route::controller(TodosController::class)->group(function () {
  Route::get('/', 'index');
  Route::match(['post', 'put', 'patch'], '/create', 'create');
  Route::match(['post', 'put', 'patch'], '/update', 'update');
});
