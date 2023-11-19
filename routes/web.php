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

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

use App\Http\Controllers\ExpenseReportController;
Route::resource('/expense_reports', ExpenseReportController::class);

Route::get('/expense_reports/{id}/confirmDelete',[ExpenseReportController::class, 'confirmDelete']);

Route::get('/expense_reports/{id}/confirmSendMail',[ExpenseReportController::class, 'confirmSendMail']);

Route::post('/expense_reports/{id}/sendMail',[ExpenseReportController::class, 'sendMail']);


use App\Http\Controllers\ExpenseController;
Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);

// use App\ExpenseController;
// Route::get('/expense_reports/{expense_report}/expenses/create',[ExpenseController::class, 'create']);

// Route::post('/expense_reports/{expense_report}/expenses',[ExpenseController::class, 'store']);


// Route::resource('/expense_reports', \App\Http\Controllers\ExpenseReportController::class, 'index');

// Route::get('/', 'HomeController@index');

// Route::get('/dashboard', 'DashboardController');

// Route::get('/', [HomeController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
