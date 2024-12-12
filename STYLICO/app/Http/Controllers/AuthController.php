<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
   public function authenticate(Request $request){
    $credentials = $request -> only('login_id','password');

    if(Auth::attempt($credentials)){
        //認証成功後、ホームページにリダイレクト
        return redirect()->route('home');
    }

    //認証失敗時
    return redirect()->route('login')->with('error','ログインIDまたはパスワードが間違っています。');

   } 
}
