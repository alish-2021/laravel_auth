<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PanelController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [PageController::class, 'test'])->name('test');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');

Route::get('/article', [PageController::class, 'articleList'])->name('articleList');
Route::get('/article/{id}', [PageController::class, 'article'])->name('article');
Route::get('/article/create', [PageController::class, 'articleCreate'])->name('articleCreate');
Route::post('/article/save', [PanelController::class, 'articleCreate']);
