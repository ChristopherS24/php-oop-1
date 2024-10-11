<?php

class Movie {
    public $title;
    public $genres;
    private $year;
    public $actors;

    function __construct($title, $genres, $actors, $years) {
        $this->title = $title;
        $this->genres = $genres;
        $this->year = $year;
        $this->actors = $actors;
    }

    public function setYear($year) {
        $this->year = $year;
    }

}

$nopainnogain = new Movie('No Pain No Gain', $genres, 2013, $actors);
//$nopainnogain->title = 'No Pain No Gain';
$nopainnogain->genres = [
    'Action',
    'Drama',
    'Noir',
    'Comedy'
];
$nopainnogain->setYear('2013');
$nopainnogain->actors = [
    'Dwayne Johnson',
    'Mark Wahlberg',
    'Anthony Mackie'
];

var_dump($nopainnogain);
?>