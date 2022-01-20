<?php

//Si l'utilisateur a choisit son nombre de carte
if (isset($_POST['choix_paires'])){
    unset($_SESSION['comparer']);
    unset($_SESSION['plateau']);
    unset($_SESSION['pop_up']);
    $_SESSION['compteur'] = 0;
    
    //Si le nombre sélectionner est différent du la valeur select de départ
    if ($_POST['select_nombre_paires'] != 0){
        $nombre_paires = $_POST['select_nombre_paires'];
        $_SESSION['nombre_paires'] = $nombre_paires;
        //On instancie un nouveau plateau qui sera stocké dans la @var Session['plateau']
        $plateau = new Plateau($nombre_paires);
        $shuffle_plateau = $plateau->Creer_Plateau($plateau);
        $plateau = $shuffle_plateau;
        shuffle($plateau);
        $_SESSION['plateau'] = $plateau;

    //Sinon on détruit la session si le nombre n'a pas été selectionné
    } else {
        echo "Veuillez sélectionner un nombre valide";
        unset($_SESSION['plateau']);
    }
}
?>