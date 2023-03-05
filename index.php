<?php
require __DIR__ .  '/db.php';
require  __DIR__ . '/classes/classMovie.php';

?>

<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Style css -->
        <link rel="stylesheet" href="style.css">
        
        <title>PHP OOP 1</title>
    </head>

    <body>
        <?php

            for ($i = 0; $i < count($films); $i++) {
            $film = new movie($films[$i]['name'], $films[$i]['duration'], $films[$i]['adult'], $films[$i]['publication']);
        ?>
            <ul>
                <li><?php echo $film->getTitle() ?></li>
                <li><?php echo $film->durate ?></li>
                <li><?php echo $film->yearPublication ?></li>
                <li><?php echo $film->movieYears ?></li>
            </ul>
        <?php }; ?>
    </body>

</html>