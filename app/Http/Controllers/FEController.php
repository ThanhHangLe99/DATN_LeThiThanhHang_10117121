<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\chuyenmuc;
use App\Models\tintuc;
use App\Models\video;
use App\Models\comment;
class FEController extends Controller
{
    //
    
    public function trangchu(){
        $tintuc=tintuc::all(); 
		$video=video::all();
    	$noibat=tintuc::where('noibat',1)->paginate(2);
    	return view('page.trangchu',compact('tintuc','noibat','video'));
    }
    
    public function chitiettintuc(Request $req){

    	$tintuc=tintuc::where('ID',$req->id)->first();
        $lienquan=tintuc::where('Id_ChuyenMuc',$tintuc->Id_ChuyenMuc)->get();
        $chuyenmuc=chuyenmuc::where('id',$tintuc->Id_ChuyenMuc)->first();

        return view('page.chitiettintuc',compact('tintuc','lienquan','chuyenmuc'));
    }
    
    public function loaitin($type){
        $chuyenmuc=chuyenmuc::where('id',$type)->first();
        $tintuc=tintuc::where('Id_ChuyenMuc',$type)->get();
        return view('page.loaitin',compact('tintuc','chuyenmuc'));
    }
    public function getSearch(Request $req){
        $tintuc=tintuc::where('TieuDeTin','like','%'.$req->key.'%')->get();
        return view('page.search',compact('tintuc'));

    }
    public function postComment($id,Request $request){
         $request->validate([
        'Email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
    ]);
        $tintuc=tintuc::find($id);
        $idTinTuc=$id;
        $comment= new comment;
        $comment->idTinTuc=$idTinTuc;
        $comment->NoiDung=$request->NoiDung;
        $comment->Name=$request->Name;
        $comment->Email=$request->Email;
        $comment->save();
        return back();
    }
}
