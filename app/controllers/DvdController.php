<?php

class DvdController extends BaseController {

	public function search()
	{
		$genres = Dvd::getGenres();
		$ratings = Dvd::getRatings();

		return View::make('dvds/search', [
			'genres'  => $genres,
			'ratings' => $ratings
		]);
	}

	public function listDvds()
	{
		$title = Input::get('title');
		$genre_id = Input::get('genre_id');
		$rating_id = Input::get('rating_id');
		$dvds = Dvd::search($title, $genre_id, $rating_id);	

		return View::make('dvds/dvds-list', [
			'dvds' => $dvds
		]);
	}

}