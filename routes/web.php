<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/graph', [App\Http\Controllers\GraphController::class, 'index'])->name('graph');

Route::get('/health', [App\Http\Controllers\HealthController::class, 'index'])->name('health');

Route::get('/investments', [App\Http\Controllers\InvestmentsController::class, 'index'])->name('investments');

Route::get('/taxdeclaration', [App\Http\Controllers\TaxdeclarationController::class, 'index'])->name('taxdeclaration');


Route::post('save', [SurveyController::class, 'saveData']);
