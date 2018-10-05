<?php
/***************************************************************/
/***************** Start Frontend Router ***********************/
/***************************************************************/
Route::get('/', 'MainController@index');
Route::get('/main', 'MainController@index');
Route::get('/upload', 'UploadController@index');
Route::get('/profile', 'ManageController@profile');

Route::get('/photo/{id}', 'MainController@flightDetail');
Route::get('/forum/{id}', 'MainController@forumDetail');
Route::get('/search/{aircraft}/{photographer}/{airlines}/{country}/{airport}', 'MainController@search');
Route::get('/search/{searchKey}', 'MainController@quickSearch');

////////////////AdminPanel//////////////
Route::get('/admin/userlist', 'AdminController@userlist');
Route::get('/admin/forum', 'AdminController@forum');
Route::get('/admin/photo', 'AdminController@photo');
 


////////////////////post
 Route::post('/admin/useractive', 'AdminController@userActive');
 Route::post('/admin/userdelete', 'AdminController@userDelete');
 Route::post('/admin/forumdelete', 'AdminController@forumDelete');
 Route::post('/admin/photodelete', 'AdminController@photodelete');




/***************************************************************/
/*********************** Start Auth Router *********************/
/***************************************************************/

Route::get('/home', 'HomeController@index');
Route::get('/admin/index', 'AdminController@index');
Route::get('/forums', 'ForumsController@index');
Route::get('/newtopic/{id}', 'ForumsController@newtopic');
Route::get('/forums/{id}', 'ForumsController@forumlist');
Route::get('/reply/{id}', 'ForumsController@reply');
Route::get('/newreply/{id}', 'ForumsController@newreply');
Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ProductController@htmltopdfview'));
  Auth::routes();
//// Ajax Router////////////////
Route::post('/getcountry', 'MainController@getCountryData');
Route::post('/getairport', 'MainController@getAirportData');
Route::post('/likephoto', 'MainController@likephoto');
Route::post('/getSlider', 'MainController@getSlider');
Route::post('/topicsave', 'ForumsController@topicsave');
Route::post('/replysave', 'ForumsController@replysave');
Route::post('/forum/replyup', 'ForumsController@replyup');
//Route::post('/search', 'MainController@search');

/////////////////
route::post('/getAirport', 'ManageController@getAirport');
route::post('/getAircrafttype', 'ManageController@getAircrafttype');
route::post('/getAircraft', 'ManageController@getAircraft');
route::post('/getAirline', 'ManageController@getAirline');
route::post('/upload', 'UploadController@save');    
route::post('/userphotoupload', 'UploadController@userphotosave');    
route::post('/profilesave', 'MainController@profilesave');    
route::post('/changepass', 'MainController@changepass');    

