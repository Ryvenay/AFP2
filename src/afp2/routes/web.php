<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [HomepageController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'save']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'delete']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/user/successfulRegistration', [UserController::class, 'save']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profile', [UserController::class, 'profile']);
