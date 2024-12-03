<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

<<<<<<< HEAD
use App\Models\Account;

=======
use App\Models\StylicoUser;
>>>>>>> 4b8593f0797d8c0850d071063da5289dc3627b37

class StylicoController extends Controller
{
    public function getView(){
        return view('shoki');
    }

    public function loginPostView() {
        return view('login');
    }

    public function newaccountPostView(Request $request){
    $updatedata = [
        'login_id' => $request->email,
        'user_pass' => $request->password,
        'user_name' => $request->name,
        'user_birthday' => $request->birthday,
        'user_add' => $request->addnum,
        'address_detail' => $request->address,
        'user_number' => $request->number,
        'user_gender' => $request->gender
    ];

<<<<<<< HEAD
        Account::create($updatedata);
=======
        user::create($updatedata);
       
>>>>>>> 4b8593f0797d8c0850d071063da5289dc3627b37

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

    public function edit()
    {
        $user = Auth::user();
        return view('mysize', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'height' => 'required|numeric|min:50|max:300',
            'weight' => 'required|numeric|min:20|max:500',
        ]);
        $user = Auth::user();
        $user->height = $request->input('height');
        $user->weight = $request->input('weight');
        return redirect()->route('mysize.edit')->with('success', '情報が更新されました！');
    }

    public function snapView(){
        return view('snap');
    }

}