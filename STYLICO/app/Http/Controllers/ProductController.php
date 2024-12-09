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

    public function favorite(){
        return view('favorite');
    }

    public function topsView(string $product_id){

        $product_image = Product::findOrFail($product_id);
        return view('tops', [
            'product_image' => $product_image->product_image
        ]);

        /*$image = Product::findOrFail($id); // 例: Eloquentモデル
        return view('tops', ['Product_image' => $image]);*/
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
