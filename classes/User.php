<?php

require_once "Database.php";

function valid_data($données)
{
    //trim permet de supprimer les espaces inutiles
    $données = trim($données);
    //stripslashes supprimes les antishlashs
    $données = stripslashes($données);
    //htmlspecialchars permet d'échapper certains caractéres spéciaux et les transforment en entité HTML
    $données = htmlspecialchars($données);
    return $données;
}
 
class User extends Database{
    private $id;
    //@var string public $login login de l'utilisateur
    public $login;
    //@var string public $email email de l'utilisateur
    public $password;

    public $bdd;

    public function __construct(){
        $this->login;
        $this->password;
        $this->bdd = parent::__construct();
    }

    //Inscription utilisateur
    
    public function Register($login, $password){

        $insert = "INSERT INTO utilisateurs (login, password) VALUES (:login, :password)";
        $exec_insert = $this->bdd->prepare($insert);
        $exec_insert->bindValue(':login' , $login, PDO::PARAM_STR);
        $exec_insert->bindValue(':password' , $password, PDO::PARAM_STR);
        $exec_insert->execute();
    }

    public function GetLoginDb($login){
        $select = "SELECT * FROM utilisateurs WHERE `login` = ? ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute([$login]);
        $count = $exec_select->rowCount();
        return array($count);
        //return count et si count = 1 ou 0 en fonction dans le controller on enregistre l'user ou pas
    }

    //Connexion utilisateur

    public function Connect($login){
        $select = "SELECT * FROM utilisateurs WHERE `login` = ?";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute(array($login));

        $user_data = $exec_select->fetchAll(PDO::FETCH_ASSOC);

        foreach($user_data as $data){
            $_SESSION['user_data'] = array(
                'id' => $data['id'],
                'login' => $data['login']
            );
        }
        header ('location: Accueil.php');
    }

    public function VerifDataUser($login){
        $select = "SELECT * FROM utilisateurs WHERE `login` = ? ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute([$login]);
        $resultat = $exec_select->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultat;
    }

    //Update information utilisateur

    public function UpdateData($login, $password){
        $update = "UPDATE utilisateurs SET login = ? , password = ? WHERE id = ? ";
        $exec_update = $this->bdd->prepare($update);
        $exec_update->execute([$login, $password, $_SESSION['user_data']['id']]);

        
    }

    public function ReturnNewData(){
        $select = "SELECT * FROM utilisateurs WHERE id = ? ";
        $exec_select = $this->bdd->prepare($select);
        $exec_select->execute([$_SESSION['user_data']['id']]);
        $data = $exec_select->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    
}

?>