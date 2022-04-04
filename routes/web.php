<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DatialsController;
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
    return view('include.home');
});

Route::get('/home', [IndexController::class, 'indexShow']);
Route::get('/companies', [CompanyController::class, 'companyShow']);
Route::get('/details', [DatialsController::class, 'detialsShow']);
