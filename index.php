<?php

class Movie
{
    public $title;
    public $plot;
    public $genre;
    public $vote;
    public $release;

    function __construct($_title, $_plot, $_genre, $_vote, $_release)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->genre = $_genre;
        $this->vote = $_vote;
        $this->release = $_release;
    }


    public function getDetails()
    {
        return "<br/>" . "Titole: " . $this->title . "<br/>" .
            "Genre: " . $this->genre . "<br/>" .
            "Trama: " . $this->plot . "<br/>" .
            "Voto: " . $this->vote . "<br/>" .
            "Pubblicazione" . $this->release . "<br/>";
    }
}

$movie_1 = new Movie('Avatar', '', 'azione-fantascienza', 4, 2012);
$movie_2 = new Movie('Le Ali Della Libertà', '', 'drammatico', 5, 1995);

// var_dump($movie_1);
// var_dump($movie_2);

echo $movie_1->getDetails();
echo $movie_2->getDetails();
