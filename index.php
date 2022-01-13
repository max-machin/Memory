<?php

require "classes/plateau.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/style.css" rel="stylesheet">
    <title>Memory</title>
</head>
<body>
    <h1>Memory</h1>
        <?php
        require "controller/ControllerSelectPaires.php";

        ?>
        <div class="bloc_jeux">
            <?php
                require "controller/ControllerPlateau.php";
            ?>
        </div>
    </body>
</html>