<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function (){
//     return view(view:'welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/', 'HomeController@index');

// Route::get('/dashboard', 'DashboardController');

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::resource('/expense_reports', 'ExpenseReportController');