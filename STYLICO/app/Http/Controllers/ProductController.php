<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function orderhistoryView() {
        return view('orderhistory');
    }

    public function cartView(){
        return view('cart');
    }

    public function jewelry() {
        return view('jewelry');
    }

    public function favorite(){
        return view('favorite');
    }
}
