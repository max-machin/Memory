<?php

    //Si une $_SESSION de jeux est défini
    if(isset($_SESSION['plateau'])){
        if($_SESSION['nombre_paires'] <= 5){
            $height = 240;
            $width = 170;
        }
        elseif ($_SESSION['nombre_paires'] == 6){
            $height = 250;
            $width = 160;
        }
        //Si la $_SESSION plateau comprend 7 cartes ou moins
        elseif($_SESSION['nombre_paires'] <= 8){
            $height = 210;
            $width = 140;
        }
        //Si la $_SESSION plateau comprend plus de 7 cartes
        elseif($_SESSION['nombre_paires'] > 8){
            $height = 200;
            $width = 145;
        }
        //Si la $_SESSION plateau comprend plus de 9 cartes
        elseif($_SESSION['nombre_paires'] > 9){
            $height = 200;
            $width = 110;
        }
        //On boucle sur le "plateau" contenant les cartes 
        foreach($_SESSION['plateau'] as $param => $value){
            //Si l'état de la carte est "dos", on gére l'affichage
            if ($value->etat == "dos"){
            ?>
            <form class="carte_face " action="" method="post">
                <button name="clique_carte" type="image"><img src="<?= $value->image_dos ?>" alt="image_carte_dos" height="<?= $height ?>px" width="<?= $width ?>px"></button>
                <input type="hidden" value="<?= $param ?>" name="id_carte">
                <input type="hidden" name="etat_carte" value="<?= $value->etat ?>">
            </form>
            <?php
            //Si l'état de la carte est "face", on gére l'affichage différement
            } elseif($value->etat == "face"){
            ?>
                <form class="carte_face" action=""> 
                    <button><img src="<?= $value->image ?>" alt="image_carte" height="<?= $height ?>px" width="<?= $width ?>px"></button>
                </form>
            <?php
            }
        }
    }        
?>