<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
    
    public function homepagePostView() {
        return view('home');
    }

    public function mypagePostView(){
        return view('mypage');
    }

    public function errormassegeView() {
        return view('errormassege');
    }

    public function updatepasswordView() {
        return view('updatepassword');
    }

    public function updateaccountPostView() {
        return view('updateaccount');
    }

    public function paymentPostView(){
        return view('payment');
    }

    public function datetimeView(){
        $dates =[];
        $starDate=Carbon::today();

        for($i=0; $i<4; $i++){
            $dates[]=$starDate->copy()->addDays($i);
        }
        return view('datetime');
    }
    
}
