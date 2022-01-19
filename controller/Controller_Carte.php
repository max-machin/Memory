<?php

if (isset($_POST['clique_carte'])){
    $carte = $_SESSION['plateau'][$_POST['id_carte']];
    $_SESSION['plateau'][$_POST['id_carte']]->etat = "face";
    $comparer = $carte->Comparer_carte();  
}

?>