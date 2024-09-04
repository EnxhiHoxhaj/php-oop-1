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
                            <span><span><?php echo $movie->rating ?> - <?php echo $movie->forKids($movie->rating) ?></span></span>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>