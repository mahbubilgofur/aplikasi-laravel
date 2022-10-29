<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
     public function index (){
    	$kategori =Kategori::all();
    	return view ('kategori.index',['kategori'=>$kategori]);
    }
     public function tambah (){
    	return view ('kategori.tambah');
    }
    
     public function tampil (Request $request){
    $kategori=Kategori::create([  			
    'id_kategori'=>$request->id_kategori,
    'nama_kategori'=>$request->nama_kategori,
  
    	]);
    	return redirect('/kategori');
    }
    public function hapus($id){
    	$kategori =Kategori::findOrFail($id);
    	$kategori->delete();
    	return redirect('/kategori');
    }


      public function edit($id){
    	$kategori =Kategori::findOrFail($id);
    	return view('kategori.edit',['kategori'=>$kategori]);
    }

    
      public function update( Request $request,$id){
    	$kategori =Kategori::findOrFail($id);
    	$kategori->update([
  'id_kategori'=>$request->id_kategori,
    'nama_kategori'=>$request->nama_kategori,
    	]);
    	return redirect('/kategori');
    }
}
