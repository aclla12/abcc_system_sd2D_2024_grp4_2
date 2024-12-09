<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StylicoController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {return view('welcome');});

Route::get('shoki', [StylicoController::class,'getView'])->name('shoki');

Route::get('login', function(){
    return view('login');
})->name('login');
Route::post('login',[StylicoController::class,'login']);



Route::match(['GET','POST'],'newaccount', [StylicoController::class,'newaccountPostView'])->name('newaccount');
Route::match(['GET', 'POST'],'home', [StylicoController::class, 'homepagePostView'])->name('home');
Route::get('mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');
Route::get('updateaccount', [StylicoController::class, 'updateaccountPostView'])->name('updateaccount');
Route::post('payment',[StylicoController::class, 'paymentPostView'])->name('payment');
Route::get('datetime',[StylicoController::class,'showDates'])->name('datetime');
Route::get('mysize', [StylicoController::class, 'editView'])->name('mysize.edit');
Route::post('mysize', [StylicoController::class, 'updateView'])->name('mysize.update');
Route::post('cart', [ProductController::class,'cartView'])->name('cart');
Route::get('orderhistory', [ProductController::class,'orderhistoryView'])->name('orderhistory');
Route::get('favorite', [ProductController::class,'favoriteView'])->name('favorite.get');

// 4つだす,ポケトレや掲示板の一覧表示を参考にする
Route::get('tops/list', [ProductController::class, 'topsListView'])->name('tops.post');
//Route::get('tops/{product_id}', [ProductController::class, 'topsView'])->name('tops.post');
/*Route::get('tops/{product_id}', function(string $product_id) {
     return 'hello' . $product_id;
 });*/
Route::get('outer', [ProductController::class, 'outerView'])->name('outer.post');
Route::get('shirt', [ProductController::class, 'shirtView'])->name('shirt.post');
Route::get('bottom', [ProductController::class, 'bottomView'])->name('bottom.post');
Route::post('paymentcompleted', [StylicoController::class, 'paymentcompletedpostView'])->name('paymentcompleted');
Route::get('deleteaccount', [StylicoController::class, 'deleteaccountView'])->name('deleteaccount');
Route::get('updatepassword',[StylicoController::class, 'updatepasswordView'])->name('updatepassword');


