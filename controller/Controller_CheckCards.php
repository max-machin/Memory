<?php

//@function comparant les valeurs de la session recuperant les images des cartes à comparer
function checkCardsReturned(){
    //Si les deux images à comparer sont égales alors on les laisse afficher et on "vide" la session de comparaison
    if($_SESSION['plateau'][$_SESSION['comparer'][0]]->image == $_SESSION['plateau'][$_SESSION['comparer'][1]]->image){
        $_SESSION['trouver'] = 1;
        unset($_SESSION['comparer']);
        //On incrémente le compteur pour chaque coup joué, qu'il soit bon ou raté
        $_SESSION['compteur']++;
        echo '<META http-equiv="refresh" content="0">';
    }
    //Si la premiére image != la seconde alors on définit $_SESSION['signal'] qu'on utilisera sur "Index.php"
    else {
        $_SESSION['plateau'][$_SESSION['comparer'][0]]->etat = "dos";
        $_SESSION['plateau'][$_SESSION['comparer'][1]]->etat = "dos";
        unset($_SESSION['comparer']);

        //On incrément le compteur de un à chaque raté également, et on définit $_SESSION['signal']
        $_SESSION['compteur']++;
        $_SESSION['signal'] = 1;
    }
}

?>