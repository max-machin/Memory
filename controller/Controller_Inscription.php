<?php

require "../classes/User.php";

$error_login = "";
$error_password = "";
$error_passwordRep = "";

if(isset($_POST['submit'])){
    if(!empty($_POST['login'])){
        if(!empty($_POST['password'])){
                if(!empty($_POST['passwordRepeat'])){
                    if($_POST['password'] == $_POST['passwordRepeat']){

                        $login = valid_data($_POST['login']);
                        
                        $user = new User();
                        $data = $user->GetLoginDb($login);
                    
                        if($data[0] == 1){
                            $error_login = "Le login est déjà utilisé";
                            
                        } 
                        else {

                            $password = valid_data($_POST['password']);
                            $hash = password_hash($password, PASSWORD_DEFAULT); 
                            $user = new User();
                            $user->Register($login, $hash);
                            header('location: connexion.php');
                        }
                    
                    } else {
                        $error_passwordRep = "Mot de passe non identiques";
                    }
                } else {
                    $error_passwordRep = "Veuillez vérifier le mot de passe";
                }
        } else {
            $error_password = "Veuillez insérer un mot de passe";
        }
    } else {
        $error_login = "Veuillez insérer un login";
    } 
}

?>