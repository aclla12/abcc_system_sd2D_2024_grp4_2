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

    public function cartView(){
        return view('cart');
    }

    public function jewelryView() {
        return view('jewelry');
    }

    public function favoriteView(){
        return view('favorite');
    }

    public function topsListView() {
        $products = Product::all();
  
        foreach($products as $product){
            /*$base64Image = base64_encode($products->product_image);
            $mimeType = 'image/jpeg';*/
            $product->image_base64 = $product ->product_image
            ? 'data:image/jpeg.base64,' . base64_encode($product->product_image)
            : null;
        }
        return view('tops', compact('products'));

        // バイナリデータ(0と1の集まり)をきれいにするさぎょう(めっちゃてきとう)
        //$base64Image = base64_encode($product->product_image);
        // きれいにしたバイナリデータに、タグをつけてあげる(めっちゃてきとう)
        // $mimeType = 'image/jpeg';
        //return view('tops', compact('base64Image', 'mimeType'));
    }
    public function outerView(){
        return view('outer');
    }

    public function shirtView(){
        return view('shirt');
    }

    public function bottomView(){
        return view('bottom');
    }

   
}
