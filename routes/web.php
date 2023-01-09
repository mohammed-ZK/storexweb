<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/redirect',[UserController::class, 'user_id']);


Route::get('/index',[UserController::class, 'index']);
Route::get('/signup',[UserController::class, 'sign_up']);
Route::get('/home',[UserController::class, 'home']);
Route::get('/category',[UserController::class, 'category']);
Route::get('/anime_details',[UserController::class, 'anime_details']);
Route::get('/anime_watching',[UserController::class, 'anime_watching']);
Route::get('/blog_details',[UserController::class, 'blog_details']);
Route::get('/blog',[UserController::class, 'blog']);

Route::get('/add_video',[UserController::class, 'add_video']);