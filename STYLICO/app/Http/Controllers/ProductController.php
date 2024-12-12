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
        $products = product::where('product_id','LIKE','%top%')->get();

        $products->map(function($product){
            $product -> image_data = base64_encode($product->product_image);
            return $product;
        });

        return view('tops', compact('products')); 
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
