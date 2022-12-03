<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ListImageController;
use App\Http\Controllers\ShowImageController;

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


Route::get('/',ListImageController::class)->name('images.all');
Route::get('/images/{image}',ShowImageController::class)->name('images.show');

Route::resource('/images', ImageController::class)->except('show','create');

Route::get('/image/create',[ImageController::class,'create'])->name('image.create');
Route::get('/image/{image}',[ImageController::class,'downloadsCount'])->name('images.download.count');
Route::get('/images/download/{image}',[ImageController::class,'download'])->name('images.download');

Route::post('/comments',[CommentController::class,'store'])->name('comments.store');


Auth::routes();

Route::get('/home', ListImageController::class)->name('home');