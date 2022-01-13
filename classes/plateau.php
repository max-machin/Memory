<?php

require "carte.php";

/**La classe Plateau sert à générer dynamiquement le plateau de jeux en fonction du choix de l'utilisateur,
 * il créer les cartes et mélange le jeux
 */

class Plateau {

    //@var INT Nombres paires sélectionnées par l'utilisateur
    public $nombre_paires;

    //@param INT $nombre_paires Nombres paires sélectionnées par l'utilisateur
    public function __construct($nombre_paires){
        $this->nombre_paires = $nombre_paires;
    }

    // pas de @param, construit le plateau de jeu
    // return $plateau
    public function Creer_Plateau(){
        $plateau_jeux = array();
        $images = array(1,2,3,4,5,6,7,8,9,10,11,12);
        
        for ($i = 0; $i < $this->nombre_paires; $i++){
            shuffle($images);
            $carte1 = new Carte($i, "dos", "public/images/$images[0].jpg" , "public/images/carte_dos.jpg" );
            $carte2 = new Carte($i, "dos", "public/images/$images[0].jpg" , "public/images/carte_dos.jpg" );
            array_push($plateau_jeux, $carte1, $carte2);
        }
        foreach($plateau_jeux as $key => $value){
            $value->id_carte = $key;
        }
        return $plateau_jeux;
    }

    //@param array $plateau contient le plateau de jeux à mélanger
    //return @plateau 
    public function Melanger_Plateau($plateau){
        $plateau = $this->Creer_Plateau();
        shuffle($plateau);
        return $plateau;
    }

}

?>