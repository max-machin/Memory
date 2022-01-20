<?php
$server_name = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

require_once "require/Header.php";
require_once "../controller/Controller_Inscription.php";
?>

<form action="" method="post">
    <input type="text" name="login" placeholder="Login *">
    <span><?= $error_login ?><span>
    <input type="password" name="password" placeholder="Mot de passe *">
    <span><?= $error_password ?><span>
    <input type="password" name="passwordRepeat" placeholder="Confirmer mot de passe *">
    <span><?= $error_passwordRep ?><span>
    <input type="submit" name="submit">
</form>

<?php

?>