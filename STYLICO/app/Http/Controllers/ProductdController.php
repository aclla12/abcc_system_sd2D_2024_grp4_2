<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductdController extends Controller
{
    public function orderhistory() {
        return view('orderhistory');
    }

    public function jewelry() {
        return view('jewelry');
    }
}
