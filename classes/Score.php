<?php

require_once "Database.php";

class Score extends DataBase {
    public $bdd;

    function __construct(){
        $this->bdd = parent::__construct();
    }

    public function EnregistrerScore($id, $score, $nombre_paires){
        $insert = "INSERT INTO score (id_utilisateur, score_user, date, nombre_paires) VALUES (:id , :score, NOW(), :nombre_paires)";
        $exec_insert = $this->bdd->prepare($insert);
        $exec_insert->bindParam(':id', $id , PDO::PARAM_INT);
        $exec_insert->bindParam(':score', $score, PDO::PARAM_STR);
        $exec_insert->bindParam(':nombre_paires', $nombre_paires, PDO::PARAM_INT);
        $exec_insert->execute();
    }

    public function TroisMeilleursScores($id){
        $select = "SELECT * FROM score WHERE id_utilisateur = :id ORDER BY score_user ASC LIMIT 3 ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute([':id' => $id]);
        $resultat = $exec_select->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    }

    public function CinqDernierScores($id){
        $select = "SELECT * FROM score WHERE id_utilisateur = :id ORDER BY `date` DESC LIMIT 5 ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute([':id' => $id]);
        $resultat = $exec_select->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    }

    public function HallOfFame(){
        $select = "SELECT s.score_user, s.date, s.nombre_paires, u.login FROM score AS s INNER JOIN utilisateurs AS u ON s.id_utilisateur = u.id ORDER BY score_user ASC LIMIT 10 ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute();

        $resultat = $exec_select->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;
    }
    
}

?>