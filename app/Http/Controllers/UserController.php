<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     public function index (){
    	$user =User::all();
    	return view ('user.index',['user'=>$user]);
    }
     public function tambah (){
    	return view ('user.tambah');
    }
    
     public function tampil (Request $request){
    $user=User::create([  			
    'nama'=>$request->nama,
    'username'=>$request->username,
      'email'=>$request->email,
      'password'=>$request->password,
    	]);
    	return redirect('/user');
    }
    public function hapus($id){
    	$user =User::findOrFail($id);
    	$user->delete();
    	return redirect('/user');
    }


      public function edit($id){
    	$user =User::findOrFail($id);
    	return view('user.edit',['user'=>$user]);
    }

    
      public function update( Request $request,$id){
    	$user =User::findOrFail($id);
    	$user->update([
 'nama'=>$request->nama,
    'username'=>$request->username,
      'email'=>$request->email,
      'password'=>$request->password,
    	]);
    	return redirect('/user');
    }
}
