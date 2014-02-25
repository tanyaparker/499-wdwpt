<?php

class Dvd extends Eloquent {

	public static function search($title, $genre_id, $rating_id)
	{
		$query= Dvd::where('title', 'LIKE', "%$title%")
			->take(30)
			->join('genres', 'dvds.genre_id', '=', 'genres.id')
			->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
			->join('labels', 'dvds.label_id', '=', 'labels.id')
			->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
			->join('formats', 'dvds.format_id', '=', 'formats.id');

		if($genre_id != "All") {
			//$query->where(2)->rating;
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

	public function format()
  	{
    	return $this->belongsTo('Format');
  	}

  	public function genre()
  	{
    	return $this->belongsTo('Genre');
  	}

  	public function label()
  	{
    	return $this->belongsTo('Label');
  	}

  	public function rating()
  	{
    	return $this->belongsTo('Rating');
  	}

  	public function sound()
  	{
    	return $this->belongsTo('Sound');
  	}


}