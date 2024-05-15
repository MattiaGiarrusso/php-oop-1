<?php 
require_once __DIR__. '/models/movie.php';

$avengers = new Movie ('Avengers','https://pad.mymovies.it/filmclub/2009/03/107/locandina.jpg','Superheroes','May');
$djangoUnchained = new Movie ('Django Unchained', 'https://pad.mymovies.it/filmclub/2011/05/035/locandina.jpg','Western, Commedy','April');

$movie = [
    $avengers,
    $djangoUnchained
];
?>