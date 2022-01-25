<?php

require_once "carte.php";

require_once "user.php";

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
        if (isset($_SESSION['user_data'])){
            $image = new User();
            $image_dos = $image->AfficherDosCarte();

            $plateau_jeux = array();
            $images = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg", "10.jpg","11.jpg","12.jpg");
            
            for ($i = 0; $i < $this->nombre_paires; $i++){
                shuffle($images);
                $carte1 = new Carte( "dos", "../assets/images/$images[0]" , $image_dos[0]['image_dos'] );
                $carte2 = new Carte( "dos", "../assets/images/$images[0]" , $image_dos[0]['image_dos'] );
                unset($images[0]);
                array_push($plateau_jeux, $carte1, $carte2);
            }
            foreach ($plateau_jeux as $key => $value){
                $value->position = $key;
            }
            return $plateau_jeux;
        } else {
            $plateau_jeux = array();
            $images = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg", "10.jpg","11.jpg","12.jpg");
            
            for ($i = 0; $i < $this->nombre_paires; $i++){
                shuffle($images);
                $carte1 = new Carte( "dos", "../assets/images/$images[0]" , "../assets/images/dos1.png" );
                $carte2 = new Carte( "dos", "../assets/images/$images[0]" , "../assets/images/dos1.png" );
                unset($images[0]);
                array_push($plateau_jeux, $carte1, $carte2);
            }
            foreach ($plateau_jeux as $key => $value){
                $value->position = $key;
            }
            return $plateau_jeux;
        }
    }

}

?>