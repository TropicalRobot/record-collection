<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\CollectionController;

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

Route::resource('records', RecordsController::class)->only([
    'index', 'show'
]);

Route::resource('items', ItemController::class)->only([
    'index', 'show'
]);

Route::resource('collections', CollectionController::class)->only([
    'index', 'show'
]);

Route::get('/search', [App\Http\Controllers\RecordsController::class, 'search'])->name('records-search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
