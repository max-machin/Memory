<?php

//Si une $_SESSION de jeux est défini, alors on fait disparaitre le select du nombre de paire, et on affiche l'input pour quitter partie
if(isset($_SESSION['plateau']) && !isset($_SESSION['gagner'])){
    $_SESSION['display_select'] = "none";
    $_SESSION['display1'] = "block";
    $_SESSION['display2'] = "none";
//Sinon on affiche le select du nombre de paire et on fait disparaitre le bouton quitter partie et le compteur
} else {
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    $_SESSION['display2'] = "none";
}
//Si l'utilisateur quitte la partie en cours alors on vide le plateau et on remets l'affichage avant choix du nombre de paires
if(isset($_POST['stop_partie'])){
    
    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";

    unset($_SESSION['plateau']);
    unset($_SESSION['trouver']);
    unset($_SESSION['cartes_trouver']);
    unset($_SESSION['gagner']);
}
 //Si $_SESSION['gagner'] est définit = partie finie /  alors on réinitialise nos variables de session et on affiche/cache les div
 if(isset($_SESSION['gagner'])){
    $_SESSION['display1'] = "block";
    $_SESSION['display_select'] = "none";
    $_SESSION['display2'] = "block";
    // unset($_SESSION['plateau']);
    unset($_SESSION['carte_trouver']);
    unset($_SESSION['trouver']);

}
if(isset($_POST['relancer'])){

    $_SESSION['display_select'] = "block";
    $_SESSION['display1'] = "none";
    $_SESSION['display2'] = "none";

    unset($_SESSION['compteur']);
    unset($_SESSION['plateau']);
    unset($_SESSION['trouver']);
    unset($_SESSION['cartes_trouver']);
    unset($_SESSION['gagner']);
    unset($_SESSION['score']);
}


?>