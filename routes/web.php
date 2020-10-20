<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('main.post');
})->name('home');

Route::get('/test', [PostsController::class, 'dataTable']);

Route::group(['prefix' => 'post'], function () {
    Route::get('/', [PostsController::class, 'index'])->name('main.post');
    Route::get('/create', [PostsController::class, 'create'])->name('create.post');
    Route::post('/store', [PostsController::class, 'store'])->name('store.post');
    Route::get('/byId/{id}', [PostsController::class, 'edit'])->name('edit.post');
    Route::post('/update/{id}', [PostsController::class, 'update'])->name('update.post');
    Route::get('/destroy/{id}', [PostsController::class, 'destroy'])->name('destroy.post');
});
