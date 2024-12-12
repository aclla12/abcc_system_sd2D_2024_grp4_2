<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\sales_details;

class ProductController extends Controller
{
    public function orderhistoryView() {
        return view('orderhistory');
    }

    public function jewelryView() {
        return view('jewelry');
    }

    public function favoriteView(){
        return view('favorite');
    }

    public function topsListView() {
        $products = product::where('product_id','LIKE','%top%')->get();

        $products->map(function($product){
            $product -> image_data = base64_encode($product->product_image);
            return $product;
        });

        return view('tops', compact('products')); 
    }
    
    public function outerView(){
        $products = product::where('product_id','LIKE','%out%')->get();

        $products->map(function($product){
            $product -> image_data = base64_encode($product->product_image);
            return $product;
        });

        return view('outer',compact('products'));
    }

    public function shirtView(){
        $products = product::where('product_id','LIKE','%shi%')->get();

        $products->map(function($product){
            $product -> image_data = base64_encode($product->product_image);
            return $product;
        });

        return view('shirt',compact('products'));
    }

    public function bottomView(){
        $products = product::where('product_id','LIKE','%bot%')->get();

        $products->map(function($product){
            $product -> image_data = base64_encode($product->product_image);
            return $product;
        });

        return view('bottom',compact('products'));
    }

    public function search(Request $request) {
        // 検索クエリを取得
        $search = $request->input('search');

        // 商品を検索（部分一致）
        $products = Product::query()
            ->when($search, function ($query, $search) {
                $query->where('product_name', 'like', '%' . $search . '%');
            })
            ->get();

        // ビューに商品一覧と検索クエリを渡す
        return view('', compact('products', 'search'));
    }

    public function searchGetView() {
        
    }
}
