<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\TodoController;
use App\HTtp\Controllers\ContactController;
=======
>>>>>>> refs/remotes/origin/main

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

<<<<<<< HEAD
Route::get('/',[TodoController::class, 'index']);
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> refs/remotes/origin/main
