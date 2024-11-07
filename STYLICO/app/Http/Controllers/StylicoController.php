<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylicoController extends Controller
{
    public function getView(){
        return view('shoki');
    }

    public function loginPostView() {
        return view('login');
    }

    public function newaccountPostView(){
        return view('newaccount');
    }
}
