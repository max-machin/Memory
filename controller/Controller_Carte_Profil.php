<?php

require_once "../classes/User.php";

$carte_choisie1 = "";

$carte_choisie2 = "";

$carte_choisie3 = "";

if (isset($_POST['dos1'])){
    $image_carte = $_POST['dos1'];

    $image = new User();
    $image->ChangeDosCarte($image_carte);
    $image_dos = $image->AfficherDosCarte();

    $_SESSION['image_dos_user'] = $image_dos[0]['image_dos'];

    $carte_choisie1 = "Sélectionnée";
    $carte_choisie2 = "";
    $carte_choisie3 = "";

} elseif (isset($_POST['dos2'])){
    $image_carte = $_POST['dos2'];

    $image = new User();
    $image->ChangeDosCarte($image_carte);
    $image_dos = $image->AfficherDosCarte();

    $_SESSION['image_dos_user'] = $image_dos[0]['image_dos'];

    $carte_choisie2 = "Sélectionnée";
    $carte_choisie1 = "";
    $carte_choisie3 = "";

} elseif (isset($_POST['dos3'])){
    $image_carte = $_POST['dos3'];

    $image = new User();
    $image->ChangeDosCarte($image_carte);
    $image_dos = $image->AfficherDosCarte();

    $_SESSION['image_dos_user'] = $image_dos[0]['image_dos'];

    $carte_choisie3 = "Sélectionnée";
    $carte_choisie1 = "";
    $carte_choisie2 = "";

}




?>