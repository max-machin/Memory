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
            $plateau['cartes'] = new Carte($position, $etat);
            ?>
            <form action="" method="post">
                <button name="clique_carte"><img src="public/images/back_card.jpg" alt="" height="200px" width="120px"></button>
            </form>
            <?php
        }
    }
}

?>