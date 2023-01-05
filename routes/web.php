<?php

use App\Http\Controllers\ManyController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\OneController;
use App\Http\Controllers\OneToManyPolymorphicController;
use App\Http\Controllers\OneToOnePolymorphicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
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

Route::get('/users', [UserController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/roles', [RoleController::class, 'index']);

Route::get('/hasOne', [OneController::class, 'index']);
Route::get('/hasMany', [ManyController::class, 'index']);
Route::get('/manyToMany', [ManyToManyController::class,'index']);
Route::get('/onePolymorphic', [OneToOnePolymorphicController::class, 'index']);
Route::get('/oneToManyPolymorphic', [OneToManyPolymorphicController::class, 'index']);

Route::get('/create-post', [OneToOnePolymorphicController::class, 'create']);
Route::post('/create', [OneToOnePolymorphicController::class, 'store']);


Route::get('/create-post-many', [OneToManyPolymorphicController::class, 'create_post']);
Route::post('/create-post-many', [OneToManyPolymorphicController::class, 'save']);
