<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourControllerName; 
use App\Http\Controllers\FormController; 
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
    return view('form');
    
});
Route::get('/form', 'App\Http\Controllers\FormController@index');
Route::post('/form', 'App\Http\Controllers\FormController@store');
// Route::get('/display-rows', 'YourController@displayInsertedRows')->name('display-rows');
Route::get('/display-rows', 'App\Http\Controllers\YourControllerName@displayRows')->name('display-rows');
// Route to display the edit form
Route::get('/edit/{id}', [YourControllerName::class, 'edit'])->name('edit');

// Route to update the data (handle form submission)
Route::put('/update/{id}', [YourControllerName::class, 'update'])->name('update');

// Route to delete data
Route::delete('/delete/{id}', [YourControllerName::class, 'destroy'])->name('delete');
Route::get('/create', [FormController::class, 'create'])->name('create');