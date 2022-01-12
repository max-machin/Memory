<?php

class Carte {
    public $position;
    public $etat;
    public function __construct($position, $etat)
    {
        $this->position = $position;
        $this->$etat = $etat;
    }
}

?>