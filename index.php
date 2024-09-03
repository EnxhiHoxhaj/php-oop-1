<?php

// inclusione del file Movie.php

require_once __DIR__ . '/Model/Movie.php';

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




// var_dump($inception, $la_vita_è_bella, $parasite, $amelie, $the_godfather, $spirited_away);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

    <div>
        <div class="container">
            <h2 class="title">I film più consigliati dai nostri utenti:</h2>
            <div class="card">
                <ul>
                    <li>
                        <span><strong>Titolo:</strong></span>
                        <span>Inception</span>
                    </li>
                    <li>
                        <span><strong>Regista:</strong></span>
                        <span>Inception</span>
                    </li>
                    <li>
                        <span><strong>Attori principali:</strong></span>
                        <span>Inception</span>
                    </li>
                    <li>
                        <span><strong>Lingua originale:</strong></span>
                        <span>Inception</span>
                    </li>
                    <li>
                        <span><strong>Genere:</strong></span>
                        <span>Inception</span>
                    </li>
                    <li>
                        <span><strong>Rating:</strong></span>
                        <span>Inception</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    Bonus 1:
    Modificare la classe Movie in modo che accetti piú di un genere.
    Bonus 2:
    Creare un layout completo per stampare a schermo una lista di movies.
    Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
    - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
    - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
    - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    Siate creativi e siete liberi di aggiungere metodi o proprietà a piacimento -->
</body>

</html>