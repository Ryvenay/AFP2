<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CartController;

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

Route::get('/', [HomepageController::class, 'show'])->name('home');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/addProduct', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'save']);

//

Route::get('/computer',  [ProductController::class, 'showComputers']);
Route::get('/c_component',  [ProductController::class, 'showComputerComponents']);
Route::get('/monitor',  [ProductController::class, 'showMonitors']);

Route::get('/notebook',  [ProductController::class, 'showNotebooks']);
Route::get('/tablet',  [ProductController::class, 'showTablets']);
Route::get('/accessory',  [ProductController::class, 'showTabletAccessories']);

Route::get('/printer',  [ProductController::class, 'showPrinters']);
Route::get('/prop',  [ProductController::class, 'showPrinterProps']);
Route::get('/p_component',  [ProductController::class, 'showPrinterComponents']);

Route::get('/smartphone',  [ProductController::class, 'showSmartphones']);
Route::get('/landline',  [ProductController::class, 'showLandlinePhones']);
Route::get('/phone',  [ProductController::class, 'showClassicPhones']);

Route::get('/television',  [ProductController::class, 'showTelevisions']);
Route::get('/tv_accessory',  [ProductController::class, 'showTvAccessories']);
Route::get('/photo',  [ProductController::class, 'showPhoto']);
Route::get('/media',  [ProductController::class, 'showMedia']);
Route::get('/drone',  [ProductController::class, 'showDrones']);

Route::get('/appliance',  [ProductController::class, 'showKitchenAppliances']);
Route::get('/smarthome_device',  [ProductController::class, 'showSmarthomeDevices']);
Route::get('/k_accessory',  [ProductController::class, 'showHomeAccessories']);

Route::get('/faq', function() {
    return view('users.faq', [ProductController::class, 'showHomeAccessories']);
});



Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'delete']);

Route::post('/products/{product}', [CartController::class, 'addToCart']);


Route::get('/user', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/user/successfulRegistration', [UserController::class, 'save']);
Route::get('/login', [UserController::class, 'login'])->name('login');;
Route::post('/', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profile', [UserController::class, 'profile']);

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');


Route::get('/forgotpsw', function(){
    return view('users.forgot_password'); 
});