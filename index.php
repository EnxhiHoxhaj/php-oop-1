<?php

// inclusione del file Movie.php e db.php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/db.php';

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
                <?php foreach ($db as $movie): ?>
                    <ul>
                        <li>
                            <h3><?php echo $movie->title ?></span></h3>
                        </li>
                        <li>
                            <span><strong>Regista:</strong></span>
                            <span><?php echo $movie->director ?></span>
                        </li>
                        <li>
                            <span><strong>Attori principali:</strong></span>
                            <?php foreach ($movie->mainActors as $actor): ?>
                                <span><?php echo $actor ?> -</span>
                            <?php endforeach; ?>
                        </li>
                        <li>
                            <span><strong>Lingua originale:</strong></span>
                            <span><?php echo $movie->language ?></span>
                        </li>
                        <li>
                            <span><strong>Genere:</strong></span>
                            <?php foreach ($movie->genre as $gen): ?>
                                <span><?php echo $gen ?> -</span>
                            <?php endforeach; ?>
                        </li>
                        <li>
                            <span><strong>Rating:</strong></span>
                            <span><span><?php echo $movie->rating ?></span></span>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
    // - è definita una classe ‘Movie’
    // => all’interno della classe sono dichiarate delle variabili d’istanza
    // => all’interno della classe è definito un costruttore
    // => all’interno della classe è definito almeno un metodo
    // - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    // Bonus 1:
    // Modificare la classe Movie in modo che accetti piú di un genere.
    // Bonus 2:
    // Creare un layout completo per stampare a schermo una lista di movies.
    // Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
    // - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
    // - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
    // - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
    // Siate creativi e siete liberi di aggiungere metodi o proprietà a piacimento -->
</body>

</html>