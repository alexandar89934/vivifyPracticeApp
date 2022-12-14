<?php

use App\Exceptions\CostumExceptionClass;
use App\Exceptions\CustomExceptionClass;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

Route::resource('home', \App\Http\Controllers\HomeController::class);

Route::resource('post', \App\Http\Controllers\PostController::class)->middleware('can:create,App\Post');

Route::get('/get', function () {
    throw new CustomExceptionClass();
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


Route::get('/check', ['as' => 'middle', 'middleware' => 'adult', function () {
    return view('age_approved');
}]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
