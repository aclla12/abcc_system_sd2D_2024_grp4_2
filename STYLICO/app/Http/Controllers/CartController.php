<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request){

        //商品IDの取得
        $productId = $request->input('product_id');

        //商品の在庫を確認
        $product = Product::findOrFail($productId);

        //カートにすでに同じ商品があるかチェック（ログイン中のユーザーを想定）
        $cartItem = Cart::where('product_id', $productId)->first();

        if($cartItem){
            //すでに存在する場合は数量を増加
            $cartItem->increment('amount');
        } else {
            //新しい商品をカートに追加
            Cart::create([
                'product_id' => $productId,
                'user_id' => auth()->id() ?? null, //ログインしていない場合はnull
                'amount' => 1,
            ]);
        }

        return redirect()->back()->with('success','商品がカートに追加されました！');
    }
}
