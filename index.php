<?php

class Movie {
    public $title;
    public $genres;
    private $year;
    public $actors;

    function __construct($title, $genres, $actors, $year) {
        $this->title = $title;
        $this->genres = $genres;
        $this->actors = $actors;
        $this->year = $year;
    }

    private function getYear() {
        return $this->year;
    }
}

//$nopainnogain->title = 'No Pain No Gain';

$genres = [
    'Action',
    'Drama',
    'Noir',
    'Comedy'
];

$actors = [
    'Dwayne Johnson',
    'Mark Wahlberg',
    'Anthony Mackie'
];

$year = '2013';

$nopainnogain = new Movie('No Pain No Gain', $genres, $actors, $year);
var_dump($nopainnogain);


//Altro film
$actorsnewfilm = [
    'Mark Wahlberg',
    'Amanda Seyfried',
    'Jessica Barth'
];

$tedtwo = new Movie('Ted Two', 'Comedy', $actorsnewfilm, 2015);
var_dump($tedtwo);

?>