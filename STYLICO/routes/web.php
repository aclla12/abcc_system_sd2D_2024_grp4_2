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
Route::get('mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');
Route::post('updateaccount', [StylicoController::class, 'updateaccountPostView'])->name('updateaccount');
Route::post('payment',[StylicoController::class, 'paymentPostView'])->name('payment');
Route::get('dates',[StylicoController::class,'showDates'])->name('dates');
Route::get('mysize', [StylicoController::class, 'editView'])->name('mysize.edit');
Route::post('mysize', [StylicoController::class, 'updateView'])->name('mysize.update');
Route::post('cart', [ProductController::class,'cartView'])->name('cart');
Route::post('orderhistory', [ProductController::class,'orderhistoryView'])->name('orderhistory');
Route::get('favorite', [ProductController::class,'favoriteView'])->name('favorite.get');
Route::get('jewelry', [productController::class, 'jewelryView'])->name('jeweley.post');
Route::get('perfume', [ProductController::class, 'perfumeView'])->name('perfume.post');
Route::get('goods', [ProductController::class, 'goodsView'])->name('goods.post');
Route::get('tops', [ProductController::class, 'topsView'])->name('tops.post');
Route::get('outer', [ProductController::class, 'outerView'])->name('outer.post');
Route::get('shirt', [ProductController::class, 'shirtView'])->name('shirt.post');
Route::get('bottom', [ProductController::class, 'bottomView'])->name('bottom.post');
Route::get('shoes', [ProductController::class, 'shoesView'])->name('shoes.post');
Route::get('bag', [ProductController::class, 'bagView'])->name('bag.post');
Route::post('paymentcompleted', [StylicoController::class, 'paymentcompleted'])->name('paymentcompleted.post');
Route::post('deleteaccount', [StylicoController::class, 'deleteaccountView'])->name('deleteaccount');
Route::post('updatepassword',[StylicoController::class, 'updatepasswordView'])->name('updatepassword');
Route::get('snap',[StylicoController::class, 'snapView'])->name('snap');
