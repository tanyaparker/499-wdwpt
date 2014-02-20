<?php

class DvdController extends BaseController {

	public function search()
	{
		return View::make('dvds/search');
	}

	public function listDvds()
	{
		$title = Input::get('title');
		$genre = Input::get('genre');
		$rating = Input::get('rating');
		$dvds = Dvd::search($title, $genre, $rating);	

		return View::make('dvds/dvds-list', [
			'dvds' => $dvds
		]);
	}

}