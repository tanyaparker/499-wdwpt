<?php

class Dvd extends Eloquent {

	public static function search($title, $genre_id, $rating_id)
	{
		$query = DB::table('dvds')
			->select('title', 'genre_name', 'rating_name', 
				'label_name', 'sound_name', 'format_name', 
				DB::raw("DATE_FORMAT(release_date, '%M %d %Y, %h:%i %p') AS release_date"))
			->join('genres', 'dvds.genre_id', '=', 'genres.id')
			->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
			->join('labels', 'dvds.label_id', '=', 'labels.id')
			->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
			->join('formats', 'dvds.format_id', '=', 'formats.id');

		if($title) {
			$query->where('title', 'LIKE', "%$title%");
		}

		if($genre_id != "All") {
			$query->where('genre_id', '=', $genre_id);
		}	

		if($rating_id != 'All') {
			$query->where('rating_id', '=', $rating_id);
		}	

		$query = dvds::where('votes', '>', 100)->take(30);

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