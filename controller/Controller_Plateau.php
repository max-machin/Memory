<?php

//Si notre variable $_SESSION de comparaison == 2 alors on effectue le fonction de comparaison des images des cartes
if (isset($_SESSION['comparer'])) {
    if (count($_SESSION['comparer']) == 2) {
        $_SESSION['trouver'] = "0";
        checkCardsReturned();
        //Si $_SESSION signal est défini lors de l'éxécution de la function de comparaison alors on retourne les cartes
        //Et on réinitialise $_SESSION signal
        if ($_SESSION['signal'] == 1) {
            $_SESSION['signal'] = 0;
            echo '<META http-equiv="refresh" content="1; URL=Memory.php">';
            exit();
        }
    }

    //Si dans "Controller_CheckCards on définit la variable $_SESSION['trouvé']
    if (isset($_SESSION['trouver'])) {
        //Si $_SESSION['carte_trouver'] est définit
        if (isset($_SESSION['cartes_trouver'])) {
            //On transforme la valeur de $_SESSION['carte_trouver'] de int -> string afin de pouvoir la comparer au nombre paires
            $_SESSION['cartes_trouver_str'] = strval($_SESSION['cartes_trouver']);
            //Si la nombre de pairs trouvé est égale au nombre de paires définit au début de la partie
            if ($_SESSION['cartes_trouver_str'] === $_SESSION['nombre_paires']) {
                $_SESSION['gagner'] = 1;
                $_SESSION['score'] = 1;

                if (isset($_SESSION['score']) == 1) {
                    $id_user = $_SESSION['user_data']['id'];

                    $score = round($_SESSION['compteur'] / $_SESSION['nombre_paires'], 2);

                    $newscore = new Score();
                    $newscore->EnregistrerScore($id_user, floatval($score), $_SESSION['nombre_paires']);
                    unset($score);
                    unset($id_user);
                    $_SESSION['score'] = 0;
                }
            }
        }
    }
}
?>
