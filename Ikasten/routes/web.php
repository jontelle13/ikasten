<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkasleController;

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


Route::get('/',[IkasleController::class,'index' ]);
Route::post('/gehitu',[IkasleController::class,'create']);
Route::post('/kendu',[IkasleController::class,'kendu']);
Route::get('/lista',[IkasleController::class, 'lista']);
Route::post('/editatu/{id}', [IkasleController::class, 'editatu']);
Route::post('/aldatu',[IkasleController::class,'aldatu']);
