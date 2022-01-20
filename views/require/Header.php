<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Memory</title>
</head>
<body>

    <?php
        if($server_name == 'localhost/projectPool2/memory/views/Inscription.php'){
    ?>
    <header>
        <nav>
            <img src="../assets/images/logo.png" alt="logo_nav" height="128px" width="130px">

            <ol>
                <li><a href="Memory.php">Memory</a></li>
                <li><a href="Connexion.php">Connexion</a></li>
            </ol>
        </nav>
    </header>
    <?php
        } else {
    ?>
    <header>
        <nav>
            <img src="../assets/images/logo.png" alt="logo_nav" height="128px" width="130px">

            <ol>
                <li><a href="Memory.php">Memory</a></li>
                <li><a href="Connexion.php">Connexion</a></li>
                <li><a href="Inscription.php">Inscription</a></li>
            </ol>
        </nav>
    </header>
    <?php
        } 
    ?>