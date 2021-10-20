<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Home;
use App\http\Controllers\Editcontroller;
use App\http\Controllers\UpdateController;
use App\http\Controllers\MemberController;

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
Route::POST('formsubmit',[Home::class,'getdata'])->name('formsubmit');
Route::get('showdata',[Home::class,'show'])->name('showdata');
Route::delete('deletedetails/{id}',[Home::class,'deletedata'])->name('deletedata.index');
Route::get('editdetails/{id}',[Editcontroller::class,'editdata'])->name('editdata');
Route::get('edit/{id}',[Editcontroller::class,'edit'])->name('edit');
Route::post('formupdate/{id}',[UpdateController::class,'updatedata'])->name('formupdate');
Route::get('member',[MemberController::class,'index']);
