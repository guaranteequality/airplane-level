<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Flight;
use App\Http\Models\Forum;
use App\Http\Models\Aircraft;
use App\User;
use Auth;
use Redirect;

class MainController extends Controller
{
    /**
    * Route::get('/', 'MainController@index');
    * Route::get('/main', 'MainController@index');
    */  
    public function index(){	

        $mostpopular=Flight::orderBy("updated_at",'desc')->orderBy("view_count",'desc')->take(3)->get();
        $mostlikephoto=Flight::orderBy("fav_count",'desc')->take(3)->get();
        $mostviewtotal=Flight::orderBy("view_count",'desc')->take(3)->get();
        $uniqueRegistration=DB::select('SELECT * FROM flight WHERE `Registration` NOT IN (SELECT `Registration` FROM `flight` GROUP BY `Registration` HAVING COUNT(`Registration`)>1)');
        $newPhoto=Flight::orderBy("created_at","desc")->take(3)->get();
        $topphotos 		= Flight::getTopFlights();		
        $recentlyphotos = Flight::getRecentlyFlights();		
        $randomphotos 	= Flight::getRandomFlights();		
        $forumdata 		= Forum::getForumData();
        $photos = Flight::count();
        $aircraft = Aircraft::all();	
        $airlines = DB::table('airline')->get();    
        $users = DB::table('users')->get();    
        $countries = DB::table('country')->get();	
        $view_count=DB::table('flight')->sum('view_count');
        return view('/homepage', compact('newPhoto','uniqueRegistration','mostpopular','mostviewtotal','mostlikephoto','view_count','photos','topphotos', 'recentlyphotos', 'randomphotos', 'forumdata','aircraft','airlines','users','countries'));		

    }

    /**
    * Route::get('/photo/{id}', 'MainController@flightDetail');	 
    */  
    public function getSlider(){
        $sliders=Flight::getSliderbytime();
    }
    public function profilesave(Request $request){
        $user=User::find(Auth::user()->id);
        $user->name=$request->input('userName');
        $user->Country=$request->input('userCountry');
        $user->City=$request->input('userCity');
        $user->StateProvince=$request->input('userState');
        $user->ZipCode=$request->input('userZip');
        $user->Location=$request->input('userLocation');
        $user->Company=$request->input('userCompany');
        $user->save();
        $result=array("status"=>1,"message"=>"Thank you. Your profile updated");
        return $result;
    }
    public function changepass(Request $request){
        $user=User::find(Auth::user()->id);
//        dd(bcrypt($request->input('CurrentPass')).":".$user->password);
        if(bcrypt($request->input('CurrentPass'))!=$user->password){
            $result=array("status"=>0,"message"=>"Incorrect Current Password");  
        }
        else{

            $user->password=bcrypt($request->input('NewPass'));
            $user->save();
            $result=array("status"=>1,"message"=>"Password changed");  
        }   
        return $result;
    }
    public function flightDetail($id){	
        $Flight = Flight::find($id);

        $Flight -> view_count =$Flight->view_count+1;
        $Flight->updated_at=date("Y-m-d H:i:s");
        $Flight -> save();
        $flight  = Flight::getFlightDetailDataById($id);            
        $likeAircraft  = Flight::getFlightsLikeAircraft($id);            
        $likeLocation  = Flight::getFlightsLikeLocation($id);            
        $likePhotographer  = Flight::getFlightsLikePhotographer($id);   
        //dd($flight);
        //        var_dump($likePhotographer);         
        return view('/flightdetails')->with('detailphoto',$flight)->with('flight',$flight)->with('likeAircraft',$likeAircraft)->with('likeLocation',$likeLocation)->with("id",$flight->id)
        ->with('likePhotographer',$likePhotographer);		
    }

    /**
    * Route::get('/forum/{id}', 'MainController@forumDetail');	
    */  
    public function forumDetail($id){    

        $forumDetailData  = Forum::getForumDetailDataById($id);            
        return view('/forumdetails', compact('forumDetailData'));        

    } 
    public function likephoto(Request $request){	
        //         dd($request->photoid);

        $userid=Auth::user()->id;
        $is_likeable=DB::table('user_photo_album')->where('userid','=',$userid)->where('photoid','=',$request->photoid)->count();
        //        dd($is_likeable);
//        dd($request->photoid);
        if($is_likeable){
            $data=array("status"=>0,"message"=>"You cannot like this photo. You already add this photo in your photoalbum");

        }   
        else{

            $Flight = Flight::find($request->photoid);
            $Flight -> fav_count =$Flight->fav_count+1;
            $Flight -> save();    

            $ins_data=array("userid"=>$userid,"photoid"=>$request->photoid);
            DB::table('user_photo_album')->insert($ins_data);
            $data=array("status"=>1,"message"=>"Thank you! This photo added on your photo Album.","fav_count"=>$Flight->fav_count);
        }
        return $data;

    }


    /**      script.js
    * When user register, get country list
    * @Param: no
    * @Return: country list array : script.js 's "getCountry()" function's ajax result
    */
    public function getCountryData(){
        $result = DB::table('country')->select('id', 'name')->get();        
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    }
    public function getAirportData(Request $request){
        $Countryid=$request->Countryid;
        $result = DB::table('airport')->select('id', 'name')->where('Countryid','=',$Countryid)->get();        
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    } 

    public function search($aircraft,$photographer,$airlines,$country,$airport){

        $result= Flight::search($aircraft,$photographer,$airlines,$country,$airport);
        return view('/searchResult', compact('result'));        

    }
    public function quickSearch($searchKey){

        $result= Flight::quickSearch($searchKey);
        return view('/searchResult', compact('result'));        

    }





}

