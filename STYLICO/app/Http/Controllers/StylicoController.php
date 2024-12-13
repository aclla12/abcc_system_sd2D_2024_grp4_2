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

    public function loginPostView(Request $request) {

        $buttonName = $request->input('button');
        $routeName = $request->route()->getName();

        if($routeName === 'newaccount' && $buttonName === 'signin'){
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

                return redirect('home')->route('login');

        }elseif($routeName === 'shoki' && $buttonName === 'login'){
            return redirect()->route('login');
        }

        $crefentils =$request->only('email','password');//ここからmysizeの補助コード
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
        }//ここまで
    return view('login');
    }

    public function newaccountPostView() {
        return view('newaccount');
    }
    
    public function homepagePostView() {
        return view('home');
    }

    public function mypagePostView(){

        $user = Account::first();

        return view('mypage',['user' => $user]);
    }

    public function errormassegeView() {
        return view('errormassege');
    }

    public function updatepasswordView() {
        return view('updatepassword');
    }

    // アカウント更新画面を表示
    public function updateaccountGetView(int $user_id) {

     $item = Account::where('user_id', $user_id)->first();

     // データが見つからない場合の処理
     if (!$item) {
         return redirect()->back()->with('error', 'データが見つかりませんでした。');
     }

     return view('updateaccount', compact('item'));
    }

    public function updateaccountEdit(Request $request, $user_id)
    {
        // 入力値のバリデーション
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id', // 必須、数値、`users`テーブルに存在するID
            'login_id' => 'required|string|max:255|unique:users,login_id', // 必須、一意、255文字以内
            'user_pass' => 'required|string|min:8|max:255|confirmed', // 必須、8文字以上、255文字以内、パスワード確認が一致する
            'user_name' => 'required|string|max:100', // 必須、100文字以内
            'user_birthday' => 'required|date|before:today', // 必須、有効な日付、現在日以前
            'user_add' => 'required|string|max:255', // 必須、255文字以内
            'address_detail' => 'nullable|string|max:255', // 任意、255文字以内
            'user_number' => 'required|string|digits:10', // 必須、10桁（電話番号）
            'user_gender' => 'required|in:male,female,other', // 必須、指定された値のいずれか
            'user_point' => 'required|integer|min:0', // 必須、整数、0以上
        ]);

        // データを取得
        $item = Account::where('user_id', $user_id)->first();

        // データが見つからない場合の処理
        if (!$item) {
            return redirect()->back()->with('error', 'データが見つかりませんでした。');
        }

        // データを更新
        $item->user_id = $validated['user_id'];
        $item->login_id = $validated['login_id'];
        $item->user_pass = $validated['user_pass'];
        $item->user_name = $validated['user_name'];
        $item->user_birthday = $validated['user_bitrthday'];
        $item->user_add = $validated['user_add'];
        $item->address_detail = $validated['address_detail'];
        $item->user_number = $validated['user_number'];
        $item->user_gender = $validated['user_gender'];
        $item->user_point = $validated['user_point'];
        $item->save();

        // 元の画面にリダイレクト
        return redirect()->route('updateaccount', $user_id)->with('success', 'データが更新されました。');
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

    public function showDates() {
        return view('datetime');
    }

}