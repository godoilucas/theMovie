<?php

require __DIR__ . "/vendor/autoload.php";

use \PlugRoute\PlugRoute;
use \PlugRoute\RouteContainer;
use \PlugRoute\Http\RequestCreator;

$route = new PlugRoute(new RouteContainer(), RequestCreator::create());

use \App\Controllers\MovieController;

$route->get('/movie/upcoming/{page}', function(\PlugRoute\Http\Request $request) {
    $response = MovieController::upcoming($request->parameter('page'));
    echo $response;
});

$route->get('/movie/toprated/{page}', function(\PlugRoute\Http\Request $request) {
    $response = MovieController::topRated($request->parameter('page'));
    echo $response;
});

$route->get('/movie/{movieId}/videos', function(\PlugRoute\Http\Request $request) {
    $response = MovieController::relatedVideos($request->parameter('movieId'));
    echo $response;
});

$route->get('/movie/genre/{genreId}', function(\PlugRoute\Http\Request $request) {
    $response = MovieController::genre($request->parameter('genreId'));
    echo $response;
});


$route->on();