<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login'); //ログインフォームのビュー
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'login_id' => ['required','login_id'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('home'); //ログイン成功後にリダイレクト
        }

        return back()->withErrors([
            'login_id' => '提供された認証情報は登録されていません。',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
