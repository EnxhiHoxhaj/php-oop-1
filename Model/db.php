<?php


//lista di film 

$inception = new Movie('Inception', 'Christopher Nolan', ['Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Ellen Page'], 'Inglese', ['Fantascienza', 'Thriller'], 'PG-13');

$la_vita_è_bella = new Movie('La vita è bella', 'Roberto Benigni', ['Roberto Benigni', ' Nicoletta Braschi,', 'Giorgio Cantarini'], 'Italiano', ['Dramma', 'Commedia'], 'PG-13');

$parasite = new Movie('Parasite', 'Bong Joon-ho', ['Song Kang-ho', 'Lee Sun-kyun', 'Cho Yeo-jeong'], 'Coreano', ['Thriller', 'Drammatico'], 'R');

$amelie = new Movie('Amélie', 'Jean-Pierre Jeunet', ['Audrey Tautou', 'Mathieu Kassovitz', 'Rufus'], 'Francese', ['Commedia romantica', 'Fantastico'], 'R');

$the_godfather = new Movie('The Godfather', 'Francis Ford Coppola', ['Marlon Brando', 'Al Pacino', 'James Caan'], 'Inglese', ['Drammatico', 'Crime'], 'R');

$spirited_away = new Movie('Spirited Away', 'Hayao Miyazaki', ['Rumi Hiiragi', 'Miyu Irino', 'Mari Natsuki'], 'Giapponese', ['Animazione', 'Avventura', 'Fantastico'], 'PG');

// aggiungo il nome di altri attori principali

$inception->addActor('Tom Hardy', 'Ken Watanabe');
$inception->addActor('Ken Watanabe');

$the_godfather->addActor('Robert Duvall');

$db = [
    new Movie('Inception', 'Christopher Nolan', ['Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Ellen Page'], 'Inglese', ['Fantascienza', 'Thriller'], 'PG-13'),
    new Movie('La vita è bella', 'Roberto Benigni', ['Roberto Benigni', ' Nicoletta Braschi,', 'Giorgio Cantarini'], 'Italiano', ['Dramma', 'Commedia'], 'PG-13'),
    new Movie('Parasite', 'Bong Joon-ho', ['Song Kang-ho', 'Lee Sun-kyun', 'Cho Yeo-jeong'], 'Coreano', ['Thriller', 'Drammatico'], 'R'),
    new Movie('Amélie', 'Jean-Pierre Jeunet', ['Audrey Tautou', 'Mathieu Kassovitz', 'Rufus'], 'Francese', ['Commedia romantica', 'Fantastico'], 'R'),
    new Movie('The Godfather', 'Francis Ford Coppola', ['Marlon Brando', 'Al Pacino', 'James Caan'], 'Inglese', ['Drammatico', 'Crime'], 'R'),
    new Movie('Spirited Away', 'Hayao Miyazaki', ['Rumi Hiiragi', 'Miyu Irino', 'Mari Natsuki'], 'Giapponese', ['Animazione', 'Avventura', 'Fantastico'], 'PG')
];


// var_dump($inception, $la_vita_è_bella, $parasite, $amelie, $the_godfather, $spirited_away);
