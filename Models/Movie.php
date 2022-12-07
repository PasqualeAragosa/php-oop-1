<?php

require __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $plot;
    public $genres;
    public $vote;
    public $release;

    function __construct($title, $plot, array $genres, $vote, $release)
    {
        $this->title = $title;
        $this->plot = $plot;
        $this->genres = $genres;
        $this->vote = $vote;
        $this->release = $release;
    }


    public function getDetails()
    {
        return "<br/>" . "Titolo: " . $this->title . "<br/>" .
            "Trama: " . $this->plot . "<br/>" .
            "Voto: " . $this->vote . "<br/>" .
            "Pubblicazione: " . $this->release . "<br/>";
    }

    public function getGenre()
    {
        return "<br/>" . "Genere: " . $this->genre;
    }
}
