<?php

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


Route::get('/get', function () {
    return "hello, this is get route";
})->name('get');

Route::get('/getname/{first_name}', [App\Http\Controllers\RequestController::class, 'getName'])->name('firstName');

Route::post('/post', [App\Http\Controllers\RequestController::class, 'postRequest'])->name('post');

Route::put('/put',  function () {
    return "hello, this is put route";
})->name('put');

Route::patch('/patch',  function () {
    return "hello, this is patch route";
})->name('patch');

Route::delete('/delete',  function () {
    return "hello, this is delete route";
})->name('delete');
