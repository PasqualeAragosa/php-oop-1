<?php

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

    public function getGenres()
    {
        $result = [];

        foreach ($this->genres as $genre) {
            array_push($result, $genre->name);
        }
        print_r($result);
    }

    public function getDetails()
    {
        return
            "<br/>" . "Titolo: " . $this->title . "<br/>" .
            "Trama: " . $this->plot . "<br/>" .
            "Genere: " .  $this->getGenres() . "<br/>" .
            "Voto: " . $this->vote . "<br/>" .
            "Pubblicazione: " . $this->release . "<br/>";
    }
}
