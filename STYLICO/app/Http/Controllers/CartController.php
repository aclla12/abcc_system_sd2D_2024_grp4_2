<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function addtToCart(Request $request){
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]); 

        //商品IDの取得
        $productId = $request->input('product_id');

        //商品の在庫を確認
        $product = Product::findOrFail($productId);

        //現在ログイン中のユーザーIDを取得
        $userId = auth()->id();

        //カートにすでに同じ商品があるかチェック（ログイン中のユーザーを想定）
        $cartItem = Cart::where('product_id', $productId)->first();
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        //if($cartItem){
            //すでに存在する場合は数量を増加
        //   $cartItem->increment('amount');
        //} else {
            //新しい商品をカートに追加
        //    Cart::create([
        //        'product_id' => $productId,
        //        'user_id' => auth()->id() ?? null, //ログインしていない場合はnull
        //        'amount' => 1,
        //    ]);
        //}
        if ($cartItem) {
            // 数量を増やす
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // 新規追加
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success','商品がカートに追加されました！');
    }
}
