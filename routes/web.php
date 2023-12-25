<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tugas',[TugasController::class,'index']);

Route::get('/tugas/create',[TugasController::class,'create']);

Route::post('/tugas/store',[TugasController::class,'store']);

Route::get('/tugas/{id}/edit',[TugasController::class,'edit']);

Route::put('/tugas/{id}',[TugasController::class,'update']);

Route::delete('/tugas/{id}',[TugasController::class,'destroy']);