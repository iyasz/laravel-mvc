<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return view('home');
});

Route::get('/services', [adminController::class, 'index']);

Route::get('/contact', [contactController::class, 'index']);

Route::get('/about', [aboutController::class, 'index']);
