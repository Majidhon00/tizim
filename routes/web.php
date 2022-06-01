<?php

use App\Http\Controllers\catController;
use App\Http\Controllers\chiqim;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\in1Contrller;
use App\Http\Controllers\kirim;
use App\Http\Controllers\upkirim;
use App\Http\Controllers\RangController;
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('in');
});
 
// show tug'irleman

Route::resource('admin',in1Contrller::class); 

Route::resource('kirim',kirim::class);
Route::resource('chiqim',chiqim::class); 
Route::resource('rang',RangController::class);
Route::resource('cat',catController::class);
Route::resource('color',ColorController::class);
Route::resource('upkirim',upkirim::class);

Route::get('up/{id}',[in1Contrller::class,'up']);
Route::get('catdel/{id}',[catController::class,'catdel'])->name('catdel');
Route::put('delkirim{delkirim}',[kirim::class,'delkirim'])->name('delkirim.delkirim');

// Route::put('upkirim{upkirim}',[kirim::class,'upkirim'])->name('upkirim.upkirim');
Route::get('rangdel/{id}',[RangController::class,'rangdel'])->name('rangdel');
Route::get('updateC/{id}',[ColorController::class,'edit'])->name('updateC');
Route::get('kid/{id}',[kirim::class,'find']); 
Route::get('kid2/{id}',[kirim::class,'find2']);
Route::get('find3/{id}',[RangController::class,'show']);
Route::get('view/{id}',[kirim::class,'view']);
Route::get('catedit/{catedit}',[catController::class,'catedit'])->name('catedit');
Route::get('adminedit/{id}',[in1Contrller::class,'adminedit']);
Route::post('ajaxdata',[RangController::class,'ajaxdata'])->name('ajaxdata');
Route::post('ajaxdate',[RangController::class,'ajaxdate'])->name('ajaxdate');
Route::post('ajaxdat',[RangController::class,'ajaxdat'])->name('ajaxdat');
Route::post('ajaxbase',[RangController::class,'ajaxbase'])->name('ajaxbase');
Route::post('ajaxbase2',[kirim::class,'ajaxbase2'])->name('ajaxbase2');
Route::post('ajaxsel',[kirim::class,'ajaxsel'])->name('ajaxsel');
Route::post('ajaxkat',[catController::class,'ajaxkat'])->name('ajaxkat');
Route::post('ajaxtur',[in1Contrller::class,'ajaxtur'])->name('ajaxtur');
Route::post('ajaxcolor',[ColorController::class,'ajaxcolor'])->name('ajaxcolor');
Route::post('ajaxmonth',[kirim::class,'ajaxmonth'])->name('ajaxmonth');