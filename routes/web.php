<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/item', [ItemController::class, 'index'])->name('item');

Route::post('/item/saveItem', [ItemController::class, 'ItemSave'])->name('saveItem');

Route::get('/editItem/{id}', [ItemController::class, 'Edit'])->name('editItem');

Route::post('/updateItem', [ItemController::class, 'Update'])->name('updateItem');

Route::get('/deleteItem/{id}', [ItemController::class, 'Delete'])->name('deleteItem');
