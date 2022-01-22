<?php

    //Si une $_SESSION de jeux est défini
    if(isset($_SESSION['plateau'])){
        //Si la $_SESSION plateau comprend 7 cartes ou moins
        if($_SESSION['nombre_paires'] <= 7){
            $height = 230;
            $width = 150;
        }
        //Si la $_SESSION plateau comprend plus de 7 cartes
        if($_SESSION['nombre_paires'] > 7){
            $height = 170;
            $width = 105;
        }
        //Si la $_SESSION plateau comprend plus de 9 cartes
        if($_SESSION['nombre_paires'] > 9){
            $height = 150;
            $width = 90;
        }
        //On boucle sur le "plateau" contenant les cartes 
        foreach($_SESSION['plateau'] as $param => $value){
            //Si l'état de la carte est "dos", on gére l'affichage
            if ($value->etat == "dos"){
            ?>
                <form class="plateau_form" action="" method="post">
                    <button name="clique_carte" type="image"><img src="<?= $value->image_dos ?>" alt="image_carte_dos" height="<?= $height ?>px" width="<?= $width ?>px"></button>
                    <input type="hidden" value="<?= $param ?>" name="id_carte">
                    <input type="hidden" name="etat_carte" value="<?= $value->etat ?>">
                </form>       
            <?php
            //Si l'état de la carte est "face", on gére l'affichage différement
            } elseif($value->etat == "face"){
            ?>
                <form class="plateau_form" action="">
                    <button><img src="<?= $value->image ?>" alt="image_carte" height="<?= $height ?>px" width="<?= $width ?>px"></button>
                </form>
            <?php
            }
        }
    }        
?>