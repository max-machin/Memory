<?php
session_start();

require "require/Header.php";
require "../controller/Controller_Connexion.php";
?>

<form action="" method="post">
    <input type="text" name="login" placeholder="Login *">
    <span><?= $error_login ?><span>
    <input type="password" name="password" placeholder="Mot de passe *">
    <span><?= $error_password ?><span>
    <input type="submit" name="submit" value="Connexion">
</form>


<?php
require "require/Footer.php";
?>