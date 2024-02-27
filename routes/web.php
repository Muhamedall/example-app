<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AvionsController;
use App\Http\Controllers\FormAvionsController;
use App\Http\Controllers\FormAvionsAfiche;
use App\Http\Controllers\VolesController;





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
//Route is class !

//makaynach ghir create kayna hta save
Route::get('/',[homeController::class,'index'])->name('homepage');
Route::get('/avions',[AvionsController::class,'index'])->name('avions.index');
Route::get('/formavions',[FormAvionsAfiche::class,'index'])->name('formavions.index');
Route::get('/VolesForm',[VolesController::class, 'index'])->name('Voles.index');
Route::post('/insertAvion',[FormAvionsController::class,'create']);
Route::delete('/avions/{id}', [FormAvionsController::class, 'delete'])->name('avions.delete');






