<?php

class Movie
{
    public $title;
    public $rating;
    // public $image;
    public $genre;
    public $plot;



    function __construct($_title, $_rating, $_genre, $_plot)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        // $this->image = $_image;
        $this->genre = $_genre;
        $this->plot = $_plot;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getRating()
    {
        return $this->rating;
    }

    function getGenre()
    {
        return $this->genre;
    }

    function getPlot()
    {
        return $this->plot;
    }
    // function getImage()
    // {
    //     return 'https://picsum.photos/200/200?random=' ;
    // }
}