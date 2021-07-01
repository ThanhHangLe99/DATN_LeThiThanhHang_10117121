<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UserController extends Controller
{
    //
    public function getDanhSach()
    {
       $data['user']=DB::table('users')->get();
    	return view('admin.user',$data);
    }
    public function demo(){
    	return view('master');
    }
    public function delete($id){
        $deleteData = DB::table('users')->where('id', '=', $id)->delete();
        return back();
    }
    public function getThem(){
        $data['them']=User::all();
        return view('admin.themuser',$data);
    }
     public function postThem(Request $request){
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->quyen=$request->quyen;
        $user->save();
        return redirect('user');
    }
    public function getSua($id){
    	$user=User::find($id);
    	return view('admin.sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id){
    	$user=User::find($id);
    	$user->name=$request->name;
    	$user->quyen=$request->quyen;
    	if($request->changePassword=="on")
    	{
    		$user->password=bcrypt($request->password);
    	}
    	$user->save();
    	return redirect('user');
    }
   
}
