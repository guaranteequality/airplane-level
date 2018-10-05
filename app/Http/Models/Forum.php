<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    protected $table = "forum";


    /* MainController@getForumData
    * get  random flight
    * @param : no
    * @return: flight data
    */
    static public function getForumData(){
        $forum = DB::table('forum')
        ->leftjoin('category', 'category.id', '=' ,'forum.category_id')		
        ->select('forum.*', 'category.name')
        ->orderBy('created_at', 'desc')
        ->limit(10)
        ->get();

        return $forum;

    }

    /* MainController@getForumDetailDataById
    * get  flight by id
    * @param : id
    * @return: flight data by id
    */
    static public function getForumDetailDataById($id){
        $items = Forum::where('id', '=', $id)->get();
        return $items;

    }
    public function getTimeDiff($time){
        $date2        = strtotime(date('Y-m-d h:i:s'));    
        $date1         = strtotime($time);
        $time_diff     = $date2 - $date1;

        $min_diff = 60;
        $hour_diff = 3600;
        $day_diff = 86400;
        $week_diff  = 604800;
        $month_diff = 2592000;
        $year_diff = 31536000;

        $ret_val = floor($time_diff/$year_diff);
        if($ret_val) return $ret_val.' years ago';

        $ret_val = floor($time_diff/$month_diff);
        if($ret_val) return $ret_val.' months ago';

        $ret_val = floor($time_diff/$week_diff);
        if($ret_val) return $ret_val.' weeks ago';

        $ret_val = floor($time_diff/$day_diff);
        if($ret_val) return $ret_val.' days ago';

        $ret_val = floor($time_diff/$hour_diff);
        if($ret_val) return $ret_val.' hours ago';

        $ret_val = floor($time_diff/$min_diff);
        if($ret_val) return $ret_val.' mins ago';

        return $time_diff.' seconds ago';


    }



}
