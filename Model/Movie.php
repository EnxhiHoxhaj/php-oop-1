<?php

class Movie
{
    public $title;
    public $director;
    public $mainActors = [];
    public $language;

    function __construct($_title, $_director, $_mainActors, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->mainActors = $_mainActors;
        $this->language = $_language;
    }
}
