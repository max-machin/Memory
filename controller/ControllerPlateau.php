<?php

//Si une session de jeux est défini
if (isset($_SESSION['plateau'])){

    //On boucle sur notre plateau d'objet (Cartes) afin de récupérer les Clefs/valeurs et utiliser ces dernières
    foreach($_SESSION['plateau'] as $key => $value){
        //Gestion de l'affichage des cartes côté "dos"
        if ($value->etat == "dos"){
        ?>
            <form action="" method="post">
                <button name="clique_carte">
                <img src="<?php echo $value->image_dos ?>" height="200px" width="140px" alt="image_dos">
                </button>
                <input type="hidden" name="id_carte" value="<?= $key ?>">
                <input type="hidden" name="etat_carte" value="<?= $value->etat ?>">
            </form>
        <?php
        }
        //Gestion de l'affichage des cartes côté "face"
        if($value->etat == "face") {
            ?>
            <form action="">
            <img src="<?php echo $value->image ?>" alt="image" height="200px" width="140px">
            </form>
            <?php
        }
    }
}


?>