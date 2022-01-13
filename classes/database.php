<?php
class Connexion_Bdd 
{

    public function __construct()
    {
        try 
        {
            $conn = new PDO("mysql:host=localhost;dbname=memory", "root", "");
            //Definition du mode d'erreur de PDO sur expetion
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connexion réussie";
            $this->conn = $conn;
            return $conn;
        //On capture l'exeption qui est executée en cas de probléme de connexion à la bdd puis on affiche les informations relatives
        } 
        catch (PDOException $e)
        {
            die(print('Erreur :! ' . $e->getMessage()));  
        }
        //Fermeture de la connexion bdd 
        $conn = null;
    }
}

?>