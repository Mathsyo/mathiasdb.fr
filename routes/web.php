<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home'])->name('home');

Auth::routes(['register' => false]);

Route::get('/messages', [MessageController::class, 'index'])->middleware('auth')->name('messages.index');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
