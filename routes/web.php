<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Auth;
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

Route::get('home',[HomeController::class, 'getHomePage'])->name('home');
Route::post('/create-volanteer',[MemberController::class,'createNewVolanteer']);


Route::get('/',[HomeController::class, 'getHomePage']);

Auth::routes();

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/admin/upload-blogs',[App\Http\Controllers\AdminController::class,'uploadBlogsPage']);
Route::post('/admin/create-upload-blogs',[App\Http\Controllers\AdminController::class,'uploadBlogs']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
