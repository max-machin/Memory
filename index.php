<?php
require "classes/Plateau.php";
session_start();
require "controller/Controller_Select_Paires.php";
require "controller/Controller_Carte.php";
require "controller/Controller_CheckCards.php";



if(isset($_SESSION['plateau'])){
    $_SESSION['display_select'] = "none";
    $_SESSION['display1'] = "block";
} else {
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
}

if(isset($_POST['stop_partie'])){
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    unset($_SESSION['plateau']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
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
        <div class="compteur_coup" style="display: <?= $_SESSION['display1'] ?>">
            <p>Compteur : <?= $_SESSION['compteur'] ?></p>
        </div>
        <!-- Bloc contenant l'affichage du jeux en dynamique dans le fichier views/View_Plateau -->
        <div class="bloc_jeux<?= $_SESSION['nombre_paires'] ?>">
            
            <?php
                //Insertion du fichier contenant l'affichage du plateau de jeux
                require "views/View_Plateau.php";
                //Si notre variable $_SESSION de comparaison == 2 alors on effectue le fonction de comparaison des images des cartes
                if(isset($_SESSION['comparer'])){
                    if (count($_SESSION['comparer']) == 2)
                        checkCardsReturned();
                    //Si $_SESSION signal est défini lors de l'éxécution de la function de comparaison alors on retourne les cartes
                    //Et on réinitialise $_SESSION signal
                    if ($_SESSION['signal'] == 1){
                        $_SESSION['signal'] = 0;
                        echo '<META http-equiv="refresh" content="1; URL=index.php">';
                        exit();
                    }
                }
            ?>

        </div>

        <div class="stop_partie" style="display: <?= $_SESSION['display1'] ?>">
            <form method="post" action="">
                <input name="stop_partie" type="submit" value="Arrêter partie">
            </form>
        </div>
    </main>
</body>
</html>