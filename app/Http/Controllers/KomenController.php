<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komen;
use DB;
use App\Models\Kategori;
use App\Models\Postingan;

class KomenController extends Controller
{
    public function index (){
    	$komen =Komen::all();
     $kategori = DB::table('tbl_kategori')
        ->get();
         $postingan = DB::table('tbl_postingan')
        ->get();
    	return view ('tampilan.home',compact(['komen','kategori','postingan']));
    }
     public function tambah (){
     	$komen =Komen::all();
       $postingan = DB::table('tbl_postingan')
        ->get();  
    	return view ('tampilan.komentar',compact(['komen','postingan']));
    }
     public function artikel (){
      $komen =Komen::all();
      return view ('tampilan.artikel',compact(['komen']));
    }
     public function tampil (Request $request){
    $komen=Komen::create([              
    'nama'=>$request->nama,
    'komentar'=>$request->komentar,
        ]);
        return redirect('/komentar');
    }
     public function tampilan (){
        $komentar =Komen::all();
        return view ('komentar.index',['komentar'=>$komentar]);
    }
     public function form (){
        $komentar =Komen::all();
        return view ('komentar.tambah',['komentar'=>$komentar]);
    }

     public function post (Request $request){
    $komen=Komen::create([  			
    'nama'=>$request->nama,
    'komentar'=>$request->komentar,
    	]);
    	return redirect('/komen');
    }
     public function hapus($id){
        $komentar =Komen::findOrFail($id);
        $komentar->delete();
        return redirect('/komen');
    }


      public function edit($id){
        $komentar =Komen::findOrFail($id);
        return view('komentar.edit',['komentar'=>$komentar]);
    }

    
      public function update( Request $request,$id){
        $komentar =Komen::findOrFail($id);
        $komentar->update([
  'nama'=>$request->nama,
    'komentar'=>$request->komentar,
        ]);
        return redirect('/komen');
    }
}
