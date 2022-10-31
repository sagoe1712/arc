<?php
class MovieTest extends \PHPUnit\Framework\TestCase
{
    public function testActorSortingByAgeDesc() {
        $movie = new Entities\Movie();
        $movie->setMovieID(1);
        $movie->setMovieTitle('Good man');
        $movie->setRunTime(60);
        $movie->addActor(new \Entities\Actor(1, 'Michael', '2010-01-01'));
        $movie->addActor(new \Entities\Actor(2, 'Jordan', '2012-12-17'));

        $movie->sortActorsByAgeDesc();

        $firstActor = $movie->getActors()[0];

        $this->assertEquals($firstActor->getName(), 'Jordan');
        $this->assertEquals($firstActor->getDateOfBirth(), '2012-12-17');
        $this->assertEquals( count($movie->getActors()), 2);

    }



}
