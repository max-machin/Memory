<?php
session_start();
require "classes/carte.php";

require "classes/plateau.php";

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
        <!-- Formulaire de choix du nombre de paires -->
        <form action="index.php" method="post">
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
        <div class="bloc_jeux">
    <?php

    if (isset($_POST['choix_paires'])){
        if ($_POST['select_nombre_paires'] != 0){

            $nombre_cartes = $_POST['select_nombre_paires'] * 2;

            $_SESSION['nombre_cartes'] = $nombre_cartes;
            $_SESSION['plateau'] = 1;
            

        } else {
           echo "Veuillez choisir un nombre valide";
        }
    }
    if (isset($_SESSION['plateau'])){

        $nombre_cartes = $_SESSION['nombre_cartes'];
        $_SESSION['plateau'] = new Plateau($nombre_cartes);
        $_SESSION['plateau']->Creer_Plateau();

        
    }
    ?>
        </div>
    </body>
</html>