<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    //
     public function getLogin(){
        return view('admin.login');
    }
     public function postLogin(Request $request){
        $arr=['email' => $request->email ,'password' => $request->password];
        if($request->remember='Remember Me'){
            $remember=true;
        }
        else{
            $remember=false;
        }
        if(Auth::attempt($arr)){
             return redirect()->intended('index');
            
        }
        else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
        }
    }
}
