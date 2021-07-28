<?php
$lotrMovies = include 'configuration/lotrmovieapi.php';

$movies = json_decode($lotrMovies, true);

$movieDetails = [];

foreach ($movies as $movie){
    $movieDetails[] = [
        'name' => $movie['name']
    ];
}

?>