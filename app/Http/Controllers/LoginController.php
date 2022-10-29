<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\facades\Auth;

class LoginController extends Controller
{
      public function index (){
      return view ('login.login',[
          'title'=>'Login',
        'active'=>'login']);
    }
      public function tambah (Request $request){
          $credentials = $request->validate([
              'email' =>'required|email:dns',
              'password' =>'required' 
          ]);
          if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/postingan');
          }
        return back()->with('logineror','login anda salah');

}
}
