<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::prefix('/customer')->controller(CustomerController::class)->name('customer')->middleware('auth')->group(function () {
    Route::get('/all', 'index')->name('.index');
    Route::get('/add', 'add')->name('.add');
    Route::post('/store', 'store')->name('.store');
    Route::get('/edit/{id}', 'edit')->name('.edit');
    Route::get('/show/{id}', 'show')->name('.show');
    Route::put('/update/{id}', 'update')->name('.update');
    Route::delete('/delete/{id}', 'destory')->name('.delete');
});
Auth::routes();
