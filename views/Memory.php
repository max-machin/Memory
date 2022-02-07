<?php
require "../classes/Plateau.php";
session_start();
require "../controller/Controller_Select_Paires.php";
require "../controller/Controller_Carte.php";
require "../controller/Controller_CheckCards.php";

require "../classes/Score.php";

require "../controller/Affichage_Memory.php";
?>

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
    
    <main>
        <a class="home" href="Accueil.php">🏠</a>
        <!-- Formulaire de choix du nombre de paires -->
        <div class="form_select" style="display: <?= $_SESSION['display_select'] ?>">
        
            <form action="" method="post">
                <label for="select_paires"><i class="fas fa-home"></i>Choisissez un nombre de cartes</label><br>
                <select name="select_nombre_paires" id="select_paires">
                    <option value="0" selected>Nombre de cartes</option>
                    <?php
                        for($i=3; $i <= 12; $i++){
                            $cartes = $i * 2;
                            echo '<option value='.$i.'>'.$cartes.'</option>';
                        }  
                    ?>
                </select><br>
                <span><?= $message ?></span><br>
                <input type="submit" name="choix_paires" value="Jouez">
            </form>
        </div>
        <!-- Compteur de comparaison de carte  -->
        <div class="compteur_coup" style="display: <?= $_SESSION['display1'] ?>">
            <p>Compteur de coup</p>
            <p class="count"><?= $_SESSION['compteur'] ?></p>
        </div>

        <?php
        if(!isset($_SESSION['gagner'])){
                ?>
                <!-- Button pour stopper une partie en cours -->
                <div class="stop_partie" style="display:<?= $_SESSION['display1'] ?>;">
                    <form method="post" action="">
                        <input name="stop_partie" type="submit" value="❌">
                    </form>
                </div>
        <?php
        }
        
        if(isset(($_SESSION['gagner']))){
            $score = round($_SESSION['compteur'] / $_SESSION['nombre_paires'], 2);
            if(isset($_SESSION['user_data'])){
                ?>
                <!-- Fin de partie -->
                <div class="bloc_fin_partie">
                    <h2>Partie terminée!</h2>
                    <p>Votre score : <?= $score ?></p>
                    <p>* Score = nombre coups / nombre paires</p>
                    <a href="Profil.php">Votre profil</a>
                    <a href="Accueil.php">Accueil</a>
                    <a href="Classement.php">Hall of fame</a>
                    <form method="post" action="">
                        <button class="restart" name="relancer">Relancer partie</button>
                    </form>
                </div>
                <?php
                    } else {
                        ?>
                    <div class="bloc_fin_partie">
                    <h2>Partie terminée!</h2>
                    <p>Votre score : <?= $score ?></p>
                    <p>* Score = nombre coups / nombre paires</p>
                    <a href="Accueil.php">Accueil</a>
                    <a href="Classement.php">Hall of fame</a>
                    <form method="post" action="">
                        <button class="restart" name="relancer">Relancer partie</button>
                    </form>
                </div>
                <?php
                    }
                }
    
        // Bloc contenant l'affichage du jeux en dynamique dans le fichier views/Plateau.php 
        if(isset($_SESSION['nombre_paires'])){
        ?>

        <section class="display_jeux" style="display: <?= $_SESSION['display1'] ?>;">
            <div class="bloc_jeux<?= $_SESSION['nombre_paires'] ?>">
            
        <?php
            //Insertion du fichier contenant l'affichage du plateau de jeux
            require "../views/Plateau.php";
            
            //Insertion du fichier des conditions de bloc_jeux
            require "../controller/Controller_Plateau.php";  
            ?>
            </div>
        </section>
    <!-- Fin du bloc contenant l'affichage du jeux -->
    <?php
        }
    ?>
    </main>
</body>
</html>