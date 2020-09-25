<?php

namespace App\Controllers;

use \App\Models\Movie;

class MovieController{
    public static function upcoming($page){
        $movie = new Movie();
        $movie->setPage($page);
        return $movie->getUpcoming();
    }

    public static function topRated($page){
        $movie = new Movie();
        $movie->setPage($page);
        return $movie->getTopRated();
    }

    public static function relatedVideos($movieId){
        $movie = new Movie();
        $movie->setMovieId($movieId);
        return $movie->getRelatedVideos();
    }

    public static function genre($genreId){
        $movie = new Movie();
        $movie->setGenreId($genreId);
        return $movie->getGenre();
    }
}