<?php

class TwitterController extends BaseController {

	public function search()
	{
		return View::make('twitter/search');
	}

	public function results()
	{
		// $title = Input::get('title');
		// $genre_id = Input::get('genre_id');
		// $rating_id = Input::get('rating_id');
		// $dvds = Dvd::search($title, $genre_id, $rating_id);	

		// return View::make('twitter/results', [
		// 	'dvds' => $dvds
		// ]);
		return View::make('twitter/reults');
	}

}

?>