<?php

namespace App\Models;

class Movie{
    private $page;
    private $movieId;
    private $genreId;

    public function setPage($page){
        $this->page = $page;
    }

    public function setMovieId($movieId){
        $this->movieId = $movieId;
    }

    public function setGenreId($genreId){
        $this->genreId = $genreId;
    }

    public function getPage(){
        return $this->page;
    }

    public function getMovieId(){
        return $this->movieId;
    }

    public function getGenreId(){
        return $this->genreId;
    }

    public function getUpcoming(){
        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US&page={$this->getPage()}";

        $response = json_decode(file_get_contents($url));

        $movies_title = array();
        $counter=0;
        foreach($response->results as $result) {
            $counter++;
            $movies_title[$counter]["title"] = $result->title;
        }

        return json_encode($movies_title);       
    }

    public function getTopRated(){
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US&page={$this->getPage()}";

        $response = json_decode(file_get_contents($url));

        $movies_title = array();
        $counter=0;
        foreach($response->results as $result) {
            $counter++;
            $movies_title[$counter]["title"] = $result->title;
        }

        return json_encode($movies_title);       
    }

    public function getRelatedVideos(){
        $url = "https://api.themoviedb.org/3/movie/{$this->getMovieId()}/videos?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US";

        $response = json_decode(file_get_contents($url));

        $movies_title = array();
        $counter=0;
        foreach($response->results as $result) {
            $counter++;
            $movies_title[$counter]["title"] = $result->name;
        }

        return json_encode($movies_title);       
    }


    public function getGenre(){
        $url = "https://api.themoviedb.org/3/genre/movie/list?api_key=1f54bd990f1cdfb230adb312546d765d&language=en-US";

        $response = json_decode(file_get_contents($url));
        $result=[];
        foreach($response->genres as $genres){
            if($genres->id == $this->getGenreId()) {
                $result['id'] = $genres->id;
                $result['genre'] = $genres->name;
            }
        }

        return json_encode($result);       
    }
}