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

    public function updateaccountPostView() {
        return view('updateaccount');
    }

    public function errormassegeView() {
        return view('errormassege');
    }

    public function updatepasswordView() {
        return view('updatepassword');
    }
}
