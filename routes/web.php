<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

