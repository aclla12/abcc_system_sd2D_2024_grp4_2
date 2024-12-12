<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StylicoController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {return view('welcome');});

Route::get('shoki', [StylicoController::class,'getView'])->name('shoki');

Route::match(['GET', 'POST'],'login',[StylicoController::class,'loginPostView'])->name('login');

Route::post('newaccount', [StylicoController::class,'newaccountPostView'])->name('newaccount');

Route::match(['GET', 'POST'],'home', [StylicoController::class, 'homepagePostView'])->name('home');

Route::match(['GET','POST'],'mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');

Route::get('updateaccount', [StylicoController::class, 'updateaccountPostView'])->name('updateaccount');

Route::match(['GET','POST'],'payment',[StylicoController::class, 'paymentPostView'])->name('payment');

Route::match(['GET','POST'],'datetime',[StylicoController::class,'showDates'])->name('datetime');

Route::get('mysize', [StylicoController::class, 'editView'])->name('mysize.edit');

Route::post('mysize', [StylicoController::class, 'updateView'])->name('mysize.update');

Route::post('cart', [ProductController::class,'cartView'])->name('cart');

Route::get('orderhistory', [ProductController::class,'orderhistoryView'])->name('orderhistory');

Route::get('favorite', [ProductController::class,'favoriteView'])->name('favorite.get');

// 4つだす,ポケトレや掲示板の一覧表示を参考にする
Route::get('/tops', [ProductController::class, 'topsListView'])->name('tops.post');
// Route::get('tops/{product_id}', [ProductController::class, 'topsView'])->name('tops.post');
// Route::get('tops/{product_id}', function(string $product_id) {
//      return 'hello' . $product_id;
//  });
Route::get('outer', [ProductController::class, 'outerView'])->name('outer.post');

Route::get('shirt', [ProductController::class, 'shirtView'])->name('shirt.post');

Route::get('bottom', [ProductController::class, 'bottomView'])->name('bottom.post');

Route::match(['GET', 'POST'],'paymentcompleted', [StylicoController::class, 'paymentcompletedpostView'])->name('paymentcompleted');

Route::get('deleteaccount', [StylicoController::class, 'deleteaccountView'])->name('deleteaccount');

Route::get('updatepassword',[StylicoController::class, 'updatepasswordView'])->name('updatepassword');


Route::get('datetime', function () {
    return view('datetime'); // maymentの日時指定の内容
})->name('datetime');