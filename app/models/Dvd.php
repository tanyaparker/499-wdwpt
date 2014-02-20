<?php

class Dvd {

	public static function search($title, $genre, $rating)
	{
		$query = DB::table('dvds')
			->select('title', 'genre_name', 'rating_name', 'label_name', 'sound_name', 'format_name', 'release_date')
			->join('genres', 'dvds.genre_id', '=', 'genres.id')
			->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
			->join('labels', 'dvds.label_id', '=', 'labels.id')
			->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
			->join('formats', 'dvds.format_id', '=', 'formats.id');


		if($title) {
			$query->where('title', 'LIKE', "%$title%");
		}

		if($genre) {
			$query->where('genre_name', 'LIKE', "%$genre%");
		}	

		if($rating) {
			$query->where('rating_name', 'LIKE', "%$rating%");
		}	

		$songs = $query->get();

		return $songs;	
	}
}