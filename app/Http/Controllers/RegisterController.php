<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     public function index (){
        return view ('register.register',[
                'title'=>'register',
            'active'=>'register']);
    }
     public function tambah (Request $request){

        $validate = $request->validate([
            'name'=>'required|max:255',
            'username' =>['required','min:3','max:255','unique:users'],
            'email' =>'required|email:dns|unique:users',
            'password' =>'required|min:5|max:255'

        ]); 
        //dd('regitrasi berhasil');
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

            $request->session()->flash('success','Registrasi berhasil silahkan login');

            return redirect('/login');

    
}
}
