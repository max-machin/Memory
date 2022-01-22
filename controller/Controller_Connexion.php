<?php

require "../classes/User.php";

$error_login = "";
$error_password = "";

if (isset($_POST['submit'])){
    if (!empty($_POST['login'])){
        if (!empty($_POST['password'])){

            $login = valid_data($_POST['login']);
            $password = valid_data($_POST['password']);

            $user = new User();
            $data = $user->VerifDataUser($login);
            if(!empty($data)){
                if (password_verify($password, $data[0]['password'])){
                    $user->Connect($login);
                }
                else {
                    $error_password = "Mot de passe ou login incorrect";
                }
            } else {
                $error_password = "Mot de passe ou login incorrect";
            }
        } else {
            $error_password = "Veuillez insérer un password";
        }
    } else {
        $error_login = "Veuillez insérer un login";
    }
}
?>