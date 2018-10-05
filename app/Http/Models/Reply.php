<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reply extends Model
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
	
	
	
	
}
