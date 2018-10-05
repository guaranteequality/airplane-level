<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    
    public function index()
    {
        $account_type = Auth::user()->type; 
        //dd($account_type)  ;     
        if($account_type == 1){
            return redirect()->action('AdminController@index');            
        }else{
            return redirect()->action('MainController@index');            
        }        
    }
	
}
