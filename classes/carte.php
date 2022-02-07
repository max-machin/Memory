<?php
/**La classe Carte sert à générer dynamiquement les cartes du plateau de jeu,
 * elle posséde 3 attributs à savoir : $etat, $image, $image_dos
 */
class Carte {

    //@var STR etat de la carte
    public $etat;
    //@var STR image de la carte
    public $image;
    //@var STR image de dos de carte commune à toutes
    public $image_dos;
    
    //@param STR $etat : etat actuelle de la carte
    //@param STR $image : image de la carte
    //@param STR $image_dos : dos de carte commune 
    public function __construct( $etat, $image, $image_dos)
    {
        $this->etat = $etat;
        $this->image = $image;
        $this->image_dos = $image_dos;
    }

    //@param ARRAY $carte : $contient les objets $carte à comparer 
    //@param 
    public function Comparer_carte(){
        //tableau qui contiendra les images des cartes à verifier
        if (!isset( $_SESSION['comparer']))
            $_SESSION['comparer'] = [];
            //On insert les cartes à comparer dans une variable de session
            array_push( $_SESSION['comparer'], $_POST['id_carte']);   
            
    }
}
?>