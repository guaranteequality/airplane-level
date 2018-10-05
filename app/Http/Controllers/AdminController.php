<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Flight;
use App\Http\Models\Forum;
use App\User;
use Auth;
use Redirect;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/admin/admin');              
    }
    public function userlist()
    {
        $users=DB::table('users')->where('type','=',0)->paginate(10);
        return view('/admin/userlist',compact('users'));              
    }
    public function forum()
    {
        $forums=DB::table('forum')->paginate(10);
       //$users="Hello";
        return view('/admin/forum',compact('forums'));              
    }

    public function photo()
    {
     
     
           $photos= Flight::quickSearch("");
        return view('/admin/photo',compact('photos'));          
    }




    public function userActive(Request $request){
        $user = User::find($request->userid);
        if($user->permission==1){
            $user -> permission =0; 
            $result=array(
                "status"=>0,
                "message"=>"Inactive Success"

            );
        }
        else{
            $user -> permission =1; 
            $result=array(
                "status"=>1,
                 "message"=>"Active Success"

            ); 
        }
        $user -> save();
        return response()->json($result, 200); 
    }
    public function userDelete(Request $request){
        $user = User::find($request->userid);
        
        $user -> delete();
        $result=array(
                "status"=>1,
                 "message"=>"Remove Success"

            );
        return response()->json($result, 200); 
    }
    public function forumDelete(Request $request){
        $forum = Forum::find($request->forumid);
        
        $forum -> delete();
        $result=array(
                "status"=>1,
                 "message"=>"Remove Success"

            );
        return response()->json($result, 200); 
    }
    public function photodelete(Request $request){
        $forum = Flight::find($request->forumid);
        
        $forum -> delete();
        $result=array(
                "status"=>1,
                 "message"=>"Remove Success"

            );
        return response()->json($result, 200); 
    }
}
