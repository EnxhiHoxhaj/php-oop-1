<?php

class Movie
{
    public $title;
    public $director;
    public $mainActors = [];
    public $language;
    public $genre = [];
    public $rating;
    public $for_who;

    function __construct($_title, $_director, $_mainActors, $_language, $_genre, $_rating)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->mainActors = $_mainActors;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->rating = $_rating;
    }

    public function addActor($_actor)
    {
        $this->mainActors[] = $_actor;
    }

    public function forKids($rating)
    {
        if ($rating == 'G') {
            $this->for_who = 'Il film è adatto a tutte le età';
        } else if ($rating == 'PG' || $rating == 'PG-13') {
            $this->for_who = 'Si consiglia la supervisione dei genitori';
        } else {
            $this->for_who = 'Il film è riservato a un pubblico adulto';
        }
        return $this->for_who;
    }
}
