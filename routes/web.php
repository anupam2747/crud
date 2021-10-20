<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Home;
use App\http\Controllers\Editcontroller;
use App\http\Controllers\UpdateController;
use App\http\Controllers\MemberController;
use App\http\Controllers\FileuploadController;

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
Route::view('upload','upload');
Route::post('fileupload',[FileuploadController::class,'fileupload'])->name('fileupload');