<?php

require "../classes/User.php";

$error_login = "";
$error_password = "";
$error_passwordRep = "";

if (isset($_POST['submit'])){

    if (!empty($_POST['login'])){

        if(!empty($_POST['password'])){

            if (!empty($_POST['passwordRepeat'])){

                $password = valid_data($_POST['password']);
                $passwordRepeat = valid_data($_POST['passwordRepeat']);

                if ($password == $passwordRepeat){

                    $hash = password_hash($password , PASSWORD_DEFAULT);
                    $login = valid_data($_POST['login']);

                    $user = new User();
                    $user->UpdateData($login , $hash);
                    $data = $user->ReturnNewData();
                    $_SESSION['user_data']['login'] = $data[0]['login'];
                    $message = "Modification effectué avec succés";
                    

                } else {
                    $error_passwordRep = "Mot de passe non indentiques";
                }
            } else {
                $error_passwordRep = "Veuillez confirmer votre nouveau mot de passe";
            }
        } else {
            $error_password = "Veuillez insérer un password";
        }
    } else {
        $error_login = "Veuillez insérer un login";
    }
}

?>