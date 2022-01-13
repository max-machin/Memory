<?php

class Carte {
    public $position;
    public $etat;
    public function __construct($position, $etat)
    {
        $this->position = $position;
        $this->$etat = $etat;
    }

    public function Get_Id_Carte()
    {
        return $this->position;
    }

    public function Afficher_Carte($etat)
    {
        $this->etat = 1;
        return $etat;
    }
}

?>