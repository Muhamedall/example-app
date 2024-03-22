<?php

use App\Http\Controllers\volControl;

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
//Route is class !

//makaynach ghir create kayna hta save

Route::get('/insertVole' ,[volControl::class ,'prepareInsert'])->name('insertVole.prepareInsert');
Route::post('/createVole' ,[volControl::class ,'store'])->name('createVole.store');





