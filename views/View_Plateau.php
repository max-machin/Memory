<?php
    //Si une $_SESSION de jeux est défini
    if(isset($_SESSION['plateau'])){
        
        //On boucle sur le "plateau" contenant les cartes 
        foreach($_SESSION['plateau'] as $param => $value){
            //Si l'état de la carte est "dos", on gére l'affichage
            if ($value->etat == "dos"){
            ?>
                <form action="" method="post">
                    <button name="clique_carte"><img src="<?= $value->image_dos ?>" alt="image_carte_dos" height="200px" width="120px"></button>
                    <input type="hidden" value="<?= $param ?>" name="id_carte">
                    <input type="hidden" name="etat_carte" value="<?= $value->etat ?>">
                </form>       
            <?php
            //Si l'état de la carte est "face", on gére l'affichage différement
            } elseif($value->etat == "face"){
            ?>
                <form action="">
                    <button><img src="<?= $value->image ?>" alt="image_carte" height="200px" width="120px"></button>
                </form>
            <?php
            }
        }
    }        
?>