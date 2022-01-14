<?php
/**
 * Class gérant l'affichage des cartes, la comparaison entre 2 etc..
 */

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

    public function Retourner_Carte($position, $etat)
    {
        $this->etat = "face";
        $this->position = $_SESSION['plateau'][$_POST['id_carte']];
        return (
            array(
                $position,
                $etat
            )
            );
    }
    public function Verifier_carte($image){

    }
}

?>