<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;

class PostinganController extends Controller
{
     public function index (){
    	$postingan =Postingan::all();
    	return view ('postingan.index',['postingan'=>$postingan]);
    }
     public function tambah (){
    	return view ('postingan.tambah');
    }
    
     public function tampil (Request $request){
    $postingan=Postingan::create([  			
    'id_post'=>$request->id_post,
    'judul'=>$request->judul,
    'isi'=>$request->isi,
    'tgl_post'=>$request->tgl_post,
    'link'=>$request->link

    	]);
    	return redirect('/postingan');
    }
    public function hapus($id){
    	$postingan =Postingan::findOrFail($id);
    	$postingan->delete();
    	return redirect('/postingan');
    }


      public function edit($id){
    	$postingan =Postingan::findOrFail($id);
    	return view('postingan.edit',['postingan'=>$postingan]);
    }

    
      public function update( Request $request,$id){
    	$postingan =Postingan::findOrFail($id);
    	$postingan->update([
 'id_post'=>$request->id_post,
    'judul'=>$request->judul,
    'isi'=>$request->isi,
    'tgl_post'=>$request->tgl_post,
    'link'=>$request->link

    	]);
    	return redirect('/postingan');
    }

}
