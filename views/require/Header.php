<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap&family=Bellefair&display=swap" rel="stylesheet">
    <title>Memory</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['user_data'])){
    ?>
    <header>
        <nav>
            <a href="Accueil.php"><img src="../assets/images/logo.png" alt="logo_nav" height="110px" width="120px"></a>

            <ol>
                <li><a href="Memory.php">Memory <i class="fas fa-brain"></i></a></li>
                <li><a href="Classement.php">Hall of fame <i class="fas fa-medal"></i></a></li>
                <li><a href="Profil.php">Profil <i class="far fa-user"></i></a></li>
                <li><a class="deco" href="Deconnexion.php">Deconnexion <i class="far fa-times-circle"></i></a></li>
            </ol>
        </nav>
    </header>
    <?php
        } else {
    ?>
    <header>
        <nav>
        <a href="Accueil.php"><img src="../assets/images/logo.png" alt="logo_nav" height="110px" width="120px"></a>

            <ol>
                <li><a href="Memory.php">Memory <i class="fas fa-brain"></i></a></li>
                <li><a href="Classement.php">Hall of fame <i class="fas fa-medal"></i></a></li>
                <li><a href="Connexion.php">Connexion</a></li>
                <li><a href="Inscription.php">Inscription</a></li>
            </ol>
        </nav>
    </header>
    <?php
        }
    ?>