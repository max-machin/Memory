<?php
session_start();
require "../views/require/Header.php";

$error_login = "";
$error_password = "";
$error_passwordRep = "";

?>

<h1>Bienvenue sur votre profil <?= $_SESSION['user_data']['login'] ?></h1>

<div>
    <h2>Modifiez vos informations</h2>

    <form action="" method="post">
        <input type="text" name="login" value="<?= $_SESSION['user_data']['login'] ?>">
        <span><?= $error_login ?><span>
        <input type="password" name="password" placeholder="Mot de passe *">
        <span><?= $error_password ?><span>
        <input type="password" name="passwordRepeat" placeholder="Confirmer mot de passe *">
        <span><?= $error_passwordRep ?><span>
        <input type="submit" name="submit">
    </form>

</div>

<?php

require "../views/require/Footer.php";