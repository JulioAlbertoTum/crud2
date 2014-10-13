<?php

class ArticleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$articles = DB::table('articles')->orderBy('id','DESC')->get();
		return View::make('articles.index')->with('articles', $articles);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('articles.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		DB::table('articles')->insertGetId(
    			array('title' => Input::get('title'), 
    				  'category' => Input::get('category'),
    				  'link' => Input::get('link'),
    				  'votes' => 0
    				  ));
		return Redirect::to('articles');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$article =  DB::table('articles')->find($id);
		return View::make('articles.show')->with('article',$article);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$article =  DB::table('articles')->find($id);
		return View::make('articles.edit')->with('article',$article);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// $article = DB::table('articles')->find($id);

		// $article->title =Input::get('title');
		// $article->category= Input::get('category');
		// $article->link= Input::get('link');
		// $article->votes= Input::get('votes');

		DB::table('articles')
			->where('id',$id)
			->update(array(
							'title' => Input::get('title'),
							'category' => Input::get('category'),
							'link' => Input::get('link'),
							'votes' => Input::get('votes')
							));
		Session::flash('message','Actualizado Correctamente');
		Session::flash('class', 'success');
		// if($article->save()){
		// 	Session::flash('message','Actualizado Correctamente');
		// 	Session::flash('class', 'success');
		// }else{
		// 	Session::flash('message',"ha ocurrido un error");
		// 	Session::flash('class','danger');
		// }
	
		return Redirect::to('articles/edit/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::table('articles')->where('id',$id)->delete();
		return Redirect::to('articles');
	}

	public function impress($id)
	{
		$article =  DB::table('articles')->find($id);
		$html =  View::make('articles.impress')->with('article',$article); 
		//echo $html;
		return PDF::load($html, 'A4', 'portrait')->show();
	}


}
