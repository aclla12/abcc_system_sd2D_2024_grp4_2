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

    public function jewelryView(){
        return view('jewelry');
    }

    public function perfumeView(){
        return view('perfume');
    }

    public function topsView(){
        return view('tops');
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

    public function shoesView(){
        return view('shoes');
    }

    public function bagView(){
        return view('bag');
    }
}
