<?php

use App\Http\Controllers\QueryController;
use App\Http\Controllers\SinglePageController;
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


Route::post('/runQuery', [QueryController::class, 'runQuery']);
Route::resource('query', QueryController::class)
    ->only(['index', 'store', 'destroy']);

Route::get('/{any}', [SinglePageController::class, 'index'])->where('any', '.*');
