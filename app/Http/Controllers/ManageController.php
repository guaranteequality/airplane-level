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
class ManageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return redirect()->action('MainController@index');            

    }
    public function profile()
    {
        $userid=Auth::user()->id;
        $photoalbum=DB::select("SELECT b.* FROM `user_photo_album` AS a
            LEFT JOIN flight AS b ON a.photoid=b.id WHERE userid='$userid'"); 
        return view('/profile',compact('photoalbum'));           

    }

    public function getAirport(Request $request){
        $countryid=$request->countryid;
        $result = DB::table('airport')->select('id', 'name')->where('Countryid','=',$countryid)->get();    
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    }
    public function getAircrafttype(Request $request){
        $aircraftmanu=$request->aircraftmanu;
        $result = DB::table('aircraft_type')->select('id', 'Name')->where('Aircraft_manu_id','=',$aircraftmanu)->get();    
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    }
    public function getAircraft(Request $request){
        $aircraftmanu=$request->aircrafttype;
        $result = DB::table('aircraft_model')->select('id', 'Name')->where('Aircraft_type_id','=',$aircraftmanu)->get();    
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    }
    public function getAirline(Request $request){
        $AirlineCategory=$request->AirlineCategory;
        $result = DB::table('airline')->select('id', 'Name')->where('Airline_category_id','=',$AirlineCategory)->get();    
        $data['status'] = 1;
        $data['msg']    = "success";
        $data['data']    = $result;
        return response()->json($data, 200); 

    }

}
