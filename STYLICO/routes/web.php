<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StylicoController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {return view('welcome');});

Route::get('shoki', [StylicoController::class,'getView'])->name('shoki');
//Route::post('home', function () {return view('home');});
Route::post('login', [StylicoController::class,'loginPostView'])->name('login');
Route::post('newaccount', [StylicoController::class,'newaccountPostView'])->name('newaccount');
Route::post('home', [StylicoController::class, 'homepagePostView'])->name('home');
Route::post('mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');
Route::post('updateaccount', [StylicoController::class, 'updateaccountPostView'])->name('updateaccount');
Route::post('payment',[StylicoController::class, 'paymentPostView'])->name('payment');
Route::get('dates',[StylicoController::class,'showDates'])->name('dates');
Route::get('mysize', [StylicoController::class, 'edit'])->name('mysize.edit');
Route::post('mysize', [StylicoController::class, 'update'])->name('mysize.update');
Route::post('cart', [ProductController::class,'cartView'])->name('cart');
Route::post('orderhistory', [ProductController::class,'orderhistoryView'])->name('orderhistory');
Route::get('favorite', [ProductController::class,'favoriteView'])->name('favorite.get');


