<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\Account;


class StylicoController extends Controller
{
    public function getView(){
        return view('shoki');
    }

    public function loginPostView(Request $request) {
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

        // 入力値を取得
         $validated = $request->validate([
            'login_id' => 'required|string',
            'user_pass' => 'required|string',
        ]);

        // データベースから該当ユーザーを取得
        $account = Account::where('login_id', $validated)->first();

        // ユーザーが存在し、パスワードが一致する場合
        if ($validated && password_verify($validated, $user_pass->password)) {
        // return response()->json(['result' => true], 200);
        return view('login');
    }
    }

    public function newaccountPostView() {
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
        $user = Auth::user();
        return view('mysize', compact('user'));
    }

    public function updateView(Request $request){
        $request->validate([
            'height' => 'required|numeric|min:50|max:300',
            'weight' => 'required|numeric|min:20|max:500',
            'shoe_size'=>'required|numeric|min:10|max:40',
            'clothing_size'=>'required|numeric|in:XS,S,M,L,XL,XXL',
        ]);
        if(Auth::check()){
            $user = Auth::mysize();
            $user->height = $request->input('height');
            $user->weight = $request->input('weight');
            $user->weight = $request->input('shoe_size');
            $user->weight = $request->input('clothing_size');
            $user->save();
            return redirect()->route('mysize.edit')->with('success', '情報が更新されました！');
        }else{
            return redirect()->route('login')->with('error','ログインが必要です');
        }
        } 
    

    public function snapView(){
        return view('snap');
    }

}