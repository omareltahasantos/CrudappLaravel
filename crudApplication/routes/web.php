<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::view('/', 'home')->name('home');

Route::get('index', [UserController::class, 'index'])->name('index');
Route::get('storeUser', [UserController::class, 'store'])->name('storeUser');
Route::get('updateUser', [UserController::class, 'update'])->name('updateUser');
Route::get('edit/{user:id}', [UserController::class, 'edit'])->name('editUser'); //Edita el registro en la base de datos
Route::get('updateUser', [UserController::class, 'update'])->name('updateUser'); //Edita el registro en la base de datos\
Route::get('index/{user:id}', [UserController::class, 'destroy'])->name('deleteUser');