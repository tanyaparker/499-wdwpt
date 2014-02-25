<?php

class Dvd extends Eloquent {

	public static function search($title, $genre_id, $rating_id)
	{
		$query = Dvd::where('title', 'LIKE', "%$title%")
			->take(30);

		if($genre_id != "All") {
			$query->where('genre_id', '=', $genre_id);
		}	

		if($rating_id != 'All') {
			$query->where('rating_id', '=', $rating_id);
		}	

		$dvds = $query->get();
		return $dvds;	
	}

	public static function getGenres() {
		$query = DB::table('genres')
			->select('id', 'genre_name');
		$genres = $query->get();
		return $genres;
	}

	public static function getRatings() {
		$query = DB::table('ratings')
			->select('id', 'rating_name');
		$ratings = $query->get();
		return $ratings;
	}
}