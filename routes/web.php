<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\TruckOrderPaymentController;

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


Route::get('/', [WebsiteController::class, 'index']);
Route::get('/home', [WebsiteController::class, 'dashboard']);
Route::get('/login', [WebsiteController::class, 'loginPage']);
Route::post('/login', [WebsiteController::class, 'login']);
Route::get('/register', [WebsiteController::class, 'registerPage']);
Route::post('/register', [WebsiteController::class, 'register']);

Route::get('/trucks', [TruckController::class, 'list']);
Route::get('/order-truck', [TruckController::class, 'orderPage']);
Route::post('/create-order', [TruckController::class, 'orderTruck']);
Route::get('/my-orders', [TruckController::class, 'listMyOrders']);
Route::post('/verify-truck-order-payment', [TruckOrderPaymentController::class, 'verifyTruckOrderPayment']);
Route::get('/drivers-orders', [TruckController::class, 'driverOrders']);


