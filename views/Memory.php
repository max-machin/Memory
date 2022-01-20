<?php
require "../classes/Plateau.php";
session_start();
require "../controller/Controller_Select_Paires.php";
require "../controller/Controller_Carte.php";
require "../controller/Controller_CheckCards.php";


//Si une $_SESSION de jeux est défini, alors on fait disparaitre le select du nombre de paire, et on affiche l'input pour quitter partie
if(isset($_SESSION['plateau']) && !isset($_SESSION['gagner'])){
    $_SESSION['display_select'] = "none";
    $_SESSION['display1'] = "block";
    $_SESSION['display2'] = "none";
//Sinon on affiche le select du nombre de paire et on fait disparaitre le bouton quitter partie et le compteur
} else {
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    $_SESSION['display2'] = "none";
}
//Si l'utilisateur quitte la partie en cours alors on vide le plateau et on remets l'affichage avant choix du nombre de paires
if(isset($_POST['stop_partie'])){
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    unset($_SESSION['plateau']);
    unset($_SESSION['trouver']);
    unset($_SESSION['cartes_trouver']);
    unset($_SESSION['gagner']);
}
 //Si $_SESSION['gagner'] est définit = partie finie /  alors on réinitialise nos variables de session et on affiche/cache les div
 if(isset($_SESSION['gagner'])){
    $_SESSION['display1'] = "block";
    $_SESSION['display_select'] = "none";
    $_SESSION['display2'] = "block";
    // unset($_SESSION['plateau']);
    unset($_SESSION['carte_trouver']);
    unset($_SESSION['trouver']);
}
if(isset($_POST['relancer'])){
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    $_SESSION['display2'] = "none";
    unset($_SESSION['plateau']);
    unset($_SESSION['trouver']);
    unset($_SESSION['cartes_trouver']);
    unset($_SESSION['gagner']);
}

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

        <!-- Formulaire de choix du nombre de paires -->
        <form action="" method="post" style="display: <?= $_SESSION['display_select'] ?>">
            <select name="select_nombre_paires" id="">
            <option value="0" selected>Nombre de pairs</option>
                <?php
                    for($i=3; $i <= 12; $i++){
                        echo '<option value='.$i.'>'.$i.'</option>';
                    }  
                ?>
            </select>
            <input type="submit" name="choix_paires">
        </form>

        <!-- Compteur de comparaison de carte  -->
        <div class="compteur_coup" style="display: <?= $_SESSION['display1'] ?>">
            <p>Compteur : <?= $_SESSION['compteur'] ?></p>
        </div>

        <?php
        if(!isset($_SESSION['gagner'])){
                ?>
                <!-- Button pour stopper une partie en cours -->
                <div class="stop_partie" style="display:<?= $_SESSION['display1'] ?>;">
                    <form method="post" action="">
                        <input name="stop_partie" type="submit" value="Arrêter partie">
                    </form>
                </div>
        <?php
        }
        ?>
        
        <!-- Affichage de fin de partie   -->
        <div class="bloc_fin_partie">
            <div style="display: <?= $_SESSION['display2'] ?>;">
                    <p>Partie terminée!</p>
                    <p>Votre score : <?= $_SESSION['compteur'] ?></p>
                    <a href="views/View_Profil.php">Votre profil</a>
                </div>

                <?php
                if(isset(($_SESSION['gagner']))){
                ?>
                    <!-- Button pour relancer une partie -->
                <div class="stop_partie" style="display:<?= $_SESSION['display1'] ?>;">
                    <form method="post" action="">
                        <button name="relancer">
                            Relancer partie
                        </button>
                    </form>
                </div>
                <?php
                }
                ?>
            </div>

    <!-- Bloc contenant l'affichage du jeux en dynamique dans le fichier views/View_Plateau -->
    <?php 
        if(isset($_SESSION['nombre_paires'])){
    ?>

        <section class="display_jeux" style="display: <?= $_SESSION['display1'] ?>;">
            <div class="bloc_jeux<?= $_SESSION['nombre_paires'] ?>">
            
        <?php
            //Insertion du fichier contenant l'affichage du plateau de jeux
            require "../views/Plateau.php";
            //Si notre variable $_SESSION de comparaison == 2 alors on effectue le fonction de comparaison des images des cartes
            if(isset($_SESSION['comparer'])){
                if (count($_SESSION['comparer']) == 2){
                    $_SESSION['trouver'] = "0";
                    checkCardsReturned();
                    //Si $_SESSION signal est défini lors de l'éxécution de la function de comparaison alors on retourne les cartes
                    //Et on réinitialise $_SESSION signal
                    if ($_SESSION['signal'] == 1){
                        $_SESSION['signal'] = 0;
                        echo '<META http-equiv="refresh" content="1; URL=Memory.php">';
                        exit();
                    }
                }
 
                //Si dans "Controller_CheckCards on définit la variable $_SESSION['trouvé']
                if(isset($_SESSION['trouver'])){
                    //Si $_SESSION['carte_trouver'] est définit
                    if(isset($_SESSION['cartes_trouver'])){
                        //On transforme la valeur de $_SESSION['carte_trouver'] de int -> string afin de pouvoir la comparer au nombre paires
                        $_SESSION['cartes_trouver_str'] = strval($_SESSION['cartes_trouver']);
                        //Si la nombre de pairs trouvé est égale au nombre de paires définit au début de la partie
                        if($_SESSION['cartes_trouver_str'] === $_SESSION['nombre_paires']){
                            $_SESSION['gagner'] = 1;
                        }
                    }
                }
            }
            
           
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