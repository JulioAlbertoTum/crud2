<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
		$articles = DB::table('articles')->orderBy('id','DESC')->get();
		return View::make('articles.box')->with('articles', $articles);
});


Route::get('/logear', 'AuthController@showLogin');


Route::post('/login','AuthController@postLogin');


Route::group(array('before' => 'auth'), function()
{
   

   	Route::post('/articles/store','ArticleController@store');
	Route::post('/articles/update/{id}','ArticleController@update');
	Route::get('/articles/destroy/{id}','ArticleController@destroy');
	Route::get('/articles/impress/{id}','ArticleController@impress');
	Route::controller('/articles','ArticleController');

  	 Route::get('/logout', 'AuthController@logOut');
});

// Route::post('/users/store','UserController@store');
// Route::post('/users/update/{id}','UserController@update');
// Route::get('/users/destroy/{id}','UserController@destroy');



//Route::controller('/users','UserController');