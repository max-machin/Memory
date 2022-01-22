<?php
session_start();
require "../views/require/Header.php";

require "../controller/Controller_Profil.php";

?>

<h1>Bienvenue sur votre profil <?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?></h1>

<div>
    <h2>Modifiez vos informations</h2>

    <form action="" method="post">
        <input type="text" name="login" value="<?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?>">
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