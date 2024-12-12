<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\StylicoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {return view('welcome');});

Route::get('/shoki', function (){
    return view('shoki');
});

Route::get('login', function(){
    return view('login');
})->name('coutom-login');

Route::post('authenticate',[AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['GET','POST'],'homepage',[StylicoController::class,'homepagePostView'])->name('homepage');

//Route::match(['GET', 'POST'],'home', [StylicoController::class, 'homepagePostView'])->name('home');

Route::match(['GET','POST'],'datetime',[StylicoController::class,'showDates'])->name('datetime');
Route::get('datetime', function () {
return view('datetime'); // maymentの日時指定の内容
})->name('datetime');

Route::get('newaccount', [StylicoController::class,'newaccountPostView'])->name('newaccount');

Route::match(['GET','POST'],'mypage', [StylicoController::class, 'mypagePostView'])->name('mypage');

Route::match(['GET','POST'],'updateaccount', [StylicoController::class, 'updateaccountGetView'])->name('updateaccount'); //更新画面を表示する

Route::match(['GET','POST'],'payment',[StylicoController::class, 'paymentPostView'])->name('payment');

Route::get('mysize', [StylicoController::class, 'editView'])->name('mysize.edit');

Route::post('mysize', [StylicoController::class, 'updateView'])->name('mysize.update');

Route::post('/cart/add', [CartController::class,'add'])->name('cart.add');

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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('datetime', function () {
    return view('datetime'); // maymentの日時指定の内容
})->name('datetime');

//　検索機能
Route::get('search', [ProductController::class, 'search'])->name('search.index');
// 検索結果
Route::get('search_get',[ProductController::class, 'searchGetView'])->name('search.get');
