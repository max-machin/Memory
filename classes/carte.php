<?php

class Carte {

    public $position;
    public $etat;
    public $image;
    public $image_dos;

    public function __construct($position, $etat, $image, $image_dos)
    {
        $this->position = $position;
        $this->etat = $etat;
        $this->image = $image;
        $this->image_dos = $image_dos;
    }

    
}

?>