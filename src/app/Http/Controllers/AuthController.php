<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()

    {
        return view('index');
    }

//ログインフォーム表示
   public function showLoginForm()
   {
    return view('login');
   }

//ログイン処理
   public function login(Request $request)
   {
    //認証情報
    $credentials = $request->only('email','password');

    //authファサード(認証機能)をadminガードを使って利用する。

    if (Auth::guard('admin') -> attempt($credentials)){
        return redirect()->intended('register')
    }
    return back()->withErrors([
        'email' => 'ログイン情報が正しくありません'
    ]);

   }


   public  function  logout(Request $request)
   {
    Auth::guard('admin')->logout();
    return  redirect('login');
   }



   public function showRegisterForm()
   {
    return view('register');
   }

   public function register(Request $request)
   {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:admins',
        'password'  => 'required|min:6|confirmed',
    ]);


    user::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success','登録完了しました');
   }
}
