<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\Account;
use App\Models\Mysize;
use App\Models\User;


class StylicoController extends Controller
{
    public function getView(){
        return view('shoki');
    }

    public function loginPostView() {

         

        /*$crefentils =$request->only('email','password');//ここからmysizeの補助コード
        if(Auth::attempt($crefentils)){
            $user=Auth::user();
            session()->put('user_data',[
                'id'=>$user->id,
                'name'=>$user->name,
                'height' => $user->height,
                'weight' => $user->weight,
                'clothing_size' => $user->clothing_size,
            ]);
            return view('mypage');
        }//ここまで*/
    }

    public function login(Request $request){
         // バリデーション
       $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    // ログイン試行
    if (Auth::attempt($credentials)) {
        // セッションを再生成
        $request->session()->regenerate();
        // ログイン成功後のリダイレクト
        return redirect()->intended('dashboard'); // 任意のリダイレクト先
    }
    // ログイン失敗時の処理
    return back()->withErrors([
        'email' => '提供された認証情報は記録と一致しません。',
    ])->onlyInput('email');
    }
    

    public function newaccountPostView(Request $request) {
        
        $newdata = [
            'login_id' => $request->email,
            'user_pass' => $request->password,
            'user_name' => $request->name,
            'user_birthday' => $request->birthday,
            'user_add' => $request->addnum,
            'adress_detail' => $request->address,
            'user_number' => $request->number,
            'user_gender' => $request->gender
        ];
            Account::create($newdata);

            return view('home');
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
        //入力画面を返却
        return view('updateaccount');
    }

    public function paymentcompletedpostView() {
        return view('paymentcompleted');
    }

    public function deleteaccountView() {
        return view('deleteaccount');
    }

    public function datetimeView(){
        $dates =[];
        $starDate=Carbon::today();

        for($i=0; $i<4; $i++){
            $dates[]=$starDate->copy()->addDays($i);
        }
        return view('datetime');
    }

    public function editView()
    {
        $user = session()->get('user_data');
        return view('mysize', compact('user'));
    }

    public function updateView(Request $request){
        $request->validate([
            'height' => 'required|numeric|min:50|max:300',
            'weight' => 'required|numeric|min:20|max:500',
            'shoe_size'=>'required|numeric|min:10|max:40',
            'clothing_size'=>'required|numeric|in:XS,S,M,L,XL,XXL',
        ]);
        $userId = session()->get('user_data.id');
        if($userId){
            $user =User::find($userId);
            if($user){
            $user->height = $request->input('height');
            $user->weight = $request->input('weight');
            $user->weight = $request->input('clothing_size');
            $user->save();

            session()->put('user_data',[
                'id'=>$user->id,
                'name'=>$user->name,
                'height'=>$user->height,
                'weight'=>$user->weight,
                'clothing_size'=>$user->clothing_size,
            ]);
            return redirect()->route('mysize.edit')->with('success', '情報が更新されました！');
            }
        }else{
            return redirect()->route('login')->with('error','ログインが必要です');
        }
    } 

    public function cartView() {
        return view('cart');
    }

    public function paymentPostView() {
        return view('payment');
    }

    public function showDates(){
        return view('datetime');
    }
}