<?php

namespace Entities;

class Movie implements \JsonSerializable {

    protected $id;
    protected $title;
    protected $runTime;
    protected $releaseDate;
    protected $actorCollection = [];


    public function setMovieID(string $id) {
        $this->id = $id;
        return $this;
    }

    public function setMovieTitle(string $title) {
        $this->title = $title;
        return $this;
    }

    public function setRunTime(int $runTime) {
        $this->runTime = $runTime;
        return $this;
    }

    public function setReleaseDate(string $releaseDate) {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function setActorCollection(array $actorCollection) {
        $this->actorCollection = $actorCollection;
        return $this;
    }

    public function getID() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getRunTime() {
        return $this->runTime;
    }

    public function getReleaseDate() {
        return $this->releaseDate;
    }

    public function addActor(Actor $actor) {
        $this->actorCollection[] = $actor;
        return $this;
    }

    public function getActors() {
        return $this->actorCollection;
    }

    public function sortActorsByAgeDesc() {
        $actor = [];
        foreach ($this->actorCollection as $key => $row) {
            $actor[$key] = $row->getDateOfBirth();
        }
       return array_multisort($actor, SORT_DESC, $this->actorCollection );
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'runTime' => $this->runTime,
            'releaseDate' => $this->releaseDate,
            'actors' => $this->getActors(),
        ];
    }
}
