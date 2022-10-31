<?php

include 'vendor/autoload.php';

use Entities\Movie;
use Entities\Actor;
use Entities\Identifier;

$movie = new Movie();
$identifier = new Identifier();

$movie->setMovieID($identifier->generateIdentifer( 6));
$movie->setMovieTitle('Inspector Gadget');
$movie->setRunTime(120);
$movie->setReleaseDate('31-10-2022');


$movie->addActor(new Actor($identifier->generateUniqueIdentifer($movie->getActors(), 4), 'Sean Pen', '2012-02-08'));
$movie->addActor(new Actor($identifier->generateUniqueIdentifer($movie->getActors(), 4), 'George Clooney', '2020-02-08'));

//sorts actors by age
$movie->sortActorsByAgeDesc();

echo json_encode($movie);


