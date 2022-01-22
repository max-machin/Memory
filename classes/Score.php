<?php

require "Database.php";

class Score extends DataBase {
    public $bdd;

    function __construct(){
        $this->bdd = parent::__construct();
    }

    public function EnregistrerScore($id, $score, $nombre_paires){
        $insert = "INSERT INTO score (id_utilisateur, score, date, nombre_paires) VALUES (:id , :score, NOW(), :nombre_paires)";
        $exec_insert = $this->bdd->prepare($insert);
        $exec_insert->bindParam(':id', $id , PDO::PARAM_INT);
        $exec_insert->bindParam(':score', $score, PDO::PARAM_STR);
        $exec_insert->bindParam(':nombre_paires', $nombre_paires, PDO::PARAM_INT);
        $exec_insert->execute();
    }

    
}

?>