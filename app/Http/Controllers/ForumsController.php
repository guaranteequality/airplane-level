<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Flight;
use App\Http\Models\Forum;
use App\Http\Models\Reply;
use App\Http\Models\Category;
use App\User;
use Auth;
use Redirect;
class ForumsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = DB::table('category')
        ->select(DB::RAW('category.*,users.name as UserName,users.photo,count(forum.id) as topiccount'))
        ->leftJoin('users','category.last_user','=','users.id')
        ->leftJoin('forum','forum.category_id','=','category.id')
        ->groupby('category.id')->get(); 
         $recent = DB::table('forum')->orderby('created_at','desc')
         ->select('forum.*','users.name as UserName','users.photo')
         ->leftJoin('users','forum.userid','=','users.id')->limit(5)->get();
        return view('/forums',compact('categories','recent'));   
    }
    public function forumlist($id)
    {
        $category = DB::table('category')->where('id','=',$id)->first(); 
        $forums = DB::table('forum')
        ->select('forum.*','users.photo','users.name as userName')
        ->leftJoin('users','users.id','=','forum.userid')
        ->where('forum.category_id','=',$id)->orderBy('forum.created_at', 'desc')->orderBy('forum.id', 'desc')->paginate(10); 

        return view('/forumslist',compact('category','forums'));   
    }
    public function newtopic($id)
    {  

        $category = DB::table('category')->where('id','=',$id)->first(); 

        return view('/newtopic',compact('category'));   
    }
    public function reply($id)
    {  

        $replys = DB::table('forum_reply')
        ->select('forum_reply.*','users.photo','users.name as userName')
        ->leftJoin('users','users.id','=','forum_reply.userid')
        ->where('forumid','=',$id)->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(10); 

        $forum = DB::table('forum')->select('forum.*','users.photo')
        ->leftJoin('users','users.id','=','forum.userid')->where('forum.id','=',$id)->first(); 
        $category = DB::table('category')->where('id','=',$forum->category_id)->first(); 
        $forum=Forum::find($id);
        $forum->view_count=$forum->view_count+1;
        $forum->save();
        return view('/replylist',compact('forum','replys','category'));   
    }

    public function newreply($id)
    {  
        $replys = DB::table('forum_reply')->where('forumid','=',$id)->orderBy('created_at', 'desc')->orderBy('id', 'desc')->get(); 
        $forum = DB::table('forum')->where('id','=',$id)->first(); 

        return view('/newreply',compact('forum','replys'));   
    }

    public function topicsave(Request $request)
    {  
        //        dd($request);
        $title=$request->input('forumtitle');        
        $category_id=$request->input('categoryid');        
        $content=$request->input('forumcontent');  
        $userid=Auth::user()->id;  
        $category=Category::find($category_id);
        $category->updated_at=date("Y-m-d H:i:s");
        $category->last_user=$userid;
        $category->last_topic=$title;
        $category->save();
        $data=array("title"=>$title,
            "category_id"=>$category_id,
            "content"=>$content,
            "created_at"=>date("Y-m-j H:i:s"),
            "updated_at" =>date("Y-m-j H:i:s"),
            "userid" => $userid)  ;
        $flight = DB::table('forum')->insert(
            $data
        );  
        return redirect("/forums/$category_id"); 
        //        return view('/newtopic',compact('category'));   
    }

    public function replysave(Request $request)
    {  
        //        dd($request);
        $title=$request->input('replytitle');        
        $forumid=$request->input('forumid');        
        $content=$request->input('replycontent');    
        $userid=Auth::user()->id;
        $data=array("title"=>$title,
            "forumid"=>$forumid,
            "content"=>$content,
            "created_at"=>date("Y-m-j H:i:s"),
            "userid" => $userid)  ;
        $flight = DB::table('forum_reply')->insert(
            $data
        );  
        return redirect("/reply/$forumid"); 
        //        return view('/newtopic',compact('category'));   
    }

    public function replyup(Request $request){
        $userid=Auth::user()->id;
        $replyid=$request->replyid;
        $reply=Reply::find($replyid);
        $reply_able=DB::table('forum_reply_history')->where('userid','=',$userid)->where('replyid','=',$replyid)->first();
        if($reply_able){
            $data=array("status"=>0,"message"=>"Cannot")  ;
        }
        else {
            //            $reply_able=DB::table('forum_reply_history')->insert()
            $data=array("status"=>0,"message"=>"Thank you!")  ;
        }
        //        $reply->up;


    }





}
