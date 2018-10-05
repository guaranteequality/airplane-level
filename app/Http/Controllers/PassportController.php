<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Models\Flight;
use App\Http\Models\Forum;
use App\Http\Models\Country;
use App\Http\Models\Aircraftmanu;
use App\Http\Models\Airlinecategory;
use App\Http\Models\Categoryphoto;
use App\Http\Models\Categoryaircraft;
use App\User;
use Auth;
use Redirect;

class UploadController extends Controller
{
    /**
    * Route::get('/', 'MainController@index');
    * Route::get('/main', 'MainController@index');
    */  
    public function index(){	

        $countries=Country::all();
        $manus=Aircraftmanu::all();
        $airlinecategory=Airlinecategory::all();
        $photocategories=Categoryphoto::all();
        $aircraftcategories=Categoryaircraft::all();
        return view('/upload')->with('countries',$countries)->with("manus",$manus)->with("airlinecategory",$airlinecategory)->with("photocategories",$photocategories)->with('aircraftcategories',$aircraftcategories);

    }

    /**
    * Route::get('/photo/{id}', 'MainController@flightDetail');	 
    */  
     public function userphotosave(Request $request){
          if( $uploadimage= $request->file('image')){
            
                $file_name = time(). '.'. $uploadimage->getClientOriginalExtension();                            
                $url=('/images/userphoto/').$file_name;    
                $uploadimage->move(public_path('images/userphoto'), $file_name);    
                $user=User::find(Auth::user()->id);
                $user->photo=$url;
                 $user->save();
                $result=array("status" =>"success", "message" => "Please Select Photo for Upload");
                return response()->json($result, 200); 
        }
        else{
               
            $result=array("status" =>"error", "message" => "Please Select Photo for Upload");
             return response()->json($result, 200); 

        }
     }
    public function save(Request $request){	
        
//        $input = $request->all();
//        $input = $request->aircraft;
//        var_dump($input);
        if( $uploadimage= $request->file('image')){
            
                $file_name = time(). '.'. $uploadimage->getClientOriginalExtension();                            
                $url=('/images/photo/').$file_name;    
                $uploadimage->move(public_path('images/photo'), $file_name);    
                
                
                $data["img_url"]=$url;
                $data["genre"]=$request->genre;
                $data["AirPort"]=$request->Airport;
                $data["Aircraft"]=$request->aircraft;
                $data["Airline"]=$request->Airline;
                $data["Registration"]=$request->reg;
                $data["SerialNumber"]=$request->serial;
                $data["PhotoDate"]=$request->regDate;
                $data["Remarks"]=$request->remarks;
                $data["showExif"]=$request->showExif;
                $data["Categories_photo"]=implode(",",$request->photocategory);
                $data["Categories_aircraft"]=implode(",",$request->aircraftcategory);
                $data["Camera"]=$request->camera;
                $data["Lens"]=$request->lens;
                $data["EnterWhy"]=$request->hot;
                $data["Comments"]=$request->commentsToScreener;
                $data["created_at"]=date("Y-m-d");
                $data["updated_at"]=date("Y-m-d");
                $data["Photograper"]=Auth::user()->name;
//                var_dump($data);
             
                Flight::create($data);
                
                $result=array("status" =>"success", "message" => "Please Select Photo for Upload");
                return response()->json($result, 200); 
        }
        else{
               
            $result=array("status" =>"error", "message" => "Please Select Photo for Upload");
             return response()->json($result, 200); 

        }


    }



}
