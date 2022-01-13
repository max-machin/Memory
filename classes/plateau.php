<?php

class Plateau {

    public $nombre_cartes;

    public function __construct($nombre_cartes)
    {
        $this->nombre_cartes = $nombre_cartes;
    }
    public function Creer_Plateau()
    {
        $plateau = [];
        for($i = 0; $i < $this->nombre_cartes; $i++){
            $position = $i;
            $etat = 0;
            $_SESSION['etat'] = $etat;
            $plateau[$i] = new Carte($position, $etat);
            $_SESSION['cartes'] = $plateau[$i]->Get_Id_Carte();
            $_SESSION['id_carte'] = $_POST['id_carte'];
            if($_SESSION['etat'] == 0){
            ?>
            <form action="" method="post">
                <button name="clique_carte"><img src="public/images/back_card.jpg" alt="" height="200px" width="120px"></button>
                <input type="hidden" name="id_carte" value="<?= $i ?>">
            </form>
            <?php
            }
            elseif ($_SESSION['etat'] == 1)
            {
                ?>
                <img src="public/images/01.jpg" alt="affichage_carte" height="200px" width="120px">
                <?php
            }
        }
        var_dump($_SESSION['id_carte']);
    }
}

?>