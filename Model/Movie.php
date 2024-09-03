<?php

class Movie
{
    public $title;
    public $director;
    public $mainActors = [];
    public $language;
    public $genre = [];

    function __construct($_title, $_director, $_mainActors, $_language, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->mainActors = $_mainActors;
        $this->language = $_language;
        $this->genre = $_genre;
    }

    public function addActor($_actor)
    {
        $this->mainActors[] = $_actor;
    }
}
