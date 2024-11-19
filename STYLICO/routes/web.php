<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StylicoController;

Route::get('/', function () {return view('welcome');});

Route::get('shoki', [StylicoController::class,'getView'])->name('shoki');
//Route::post('home', function () {return view('home');});
Route::post('login', [StylicoController::class,'loginPostView'])->name('login');
Route::post('newaccount', [StylicoController::class,'newaccountPostView'])->name('newaccount');
Route::post('home', [StylicoController::class, 'homepagePostView'])->name('home');
Route::post('mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');
Route::post('updateaccount', [StylicoController::class, 'updateaccountPostView'])->name('updateaccount');
Route::post('payment',[StylicoController::class, 'paymentPostView'])->name('payment');
Route::get('/dates',[StylicoController::class,'showDates'])->name('dates');


