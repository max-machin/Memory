<?php

require_once "../classes/User.php";

$carte_choisie1 = "";

$carte_choisie2 = "";

$carte_choisie3 = "";

$carte_boss = "";

$carte_boss2 = "";

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

} else if (isset($_POST['dos_anime1'])){
    $image_carte = $_POST['dos_anime1'];

    $image = new User();
    $image->ChangeDosCarte($image_carte);
    $image_dos = $image->AfficherDosCarte();

    $_SESSION['image_dos_user'] = $image_dos[0]['image_dos'];

    $carte_choisie3 = "";
    $carte_choisie1 = "";
    $carte_choisie2 = "";
    $carte_boss = "Sélectionnée";
    $carte_boss2 = "";

} else if (isset($_POST['dos_anime2'])){

    $image_carte = $_POST['dos_anime2'];

    $image = new User();
    $image->ChangeDosCarte($image_carte);
    $image_dos = $image->AfficherDosCarte();

    $_SESSION['image_dos_user'] = $image_dos[0]['image_dos'];

    $carte_choisie3 = "";
    $carte_choisie1 = "";
    $carte_choisie2 = "";
    $carte_boss2 = "Sélectionnée";
    $carte_boss = "";
}




?>