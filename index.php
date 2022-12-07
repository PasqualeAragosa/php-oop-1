<?php

require __DIR__ . '/Models/Movie.php';

$movie_1 = new Movie('Avatar', 'Un ex-marine su sedia a rotelle viene reclutato...', [new Genre('Fantascienza'), new Genre('Azione')], 4, 2010);
$movie_2 = new Movie('Le ali della libertà', 'Andy Dufresne viene condannato, benché innocente, a due ergastoli...', [new Genre('Drammatico'), new Genre('Giallo')], 5, 1995);

echo $movie_1->getDetails();
echo $movie_1->getGenre();

echo $movie_2->getDetails();
