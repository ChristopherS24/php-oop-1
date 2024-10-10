<?php

class Movie {
    public $title;
    public $genres;
    public $year;
    public $actors;
}

$nopainnogain = new Movie();
$nopainnogain->title = 'No Pain No Gain';
$nopainnogain->genres = [
    'Action',
    'Drama',
    'Noir',
    'Comedy'
];
$nopainnogain->year = '2013';
$nopainnogain->actors = [
    'Dwayne Johnson',
    'Mark Wahlberg',
    'Anthony Mackie'
];

?>