<?php
//Si l'utilisateur a choisit son nombre de carte
if (isset($_POST['choix_paires'])){

    //Si le nombre sélectionner est différent du la valeur select de départ
    if ($_POST['select_nombre_paires'] != 0){
        $nombre_paires = $_POST['select_nombre_paires'];
        //On instancie un nouveau plateau qui sera stocké dans la @var Session['plateau']
        $plateau = new Plateau($nombre_paires);
        $shuffle_plateau = $plateau->Melanger_Plateau($plateau);
        $grille = $shuffle_plateau;
        shuffle($grille);
        $_SESSION['plateau'] = $grille;

    //Sinon on détruit la session si le nombre n'a pas été selectionné
    } else {
        echo "Veuillez sélectionner un nombre valide";
        unset($_SESSION['plateau']);
    }
}

?>
<!-- Formulaire de choix du nombre de paires -->
<form action="" method="post">
    <select name="select_nombre_paires" id="">
        <option value="0" selected>Nombre de pairs</option>
            <?php
                for($i=3; $i <= 12; $i++){
                    echo '<option value='.$i.'>'.$i.'</option>';
                }  
            ?>
        </select>
    <input type="submit" name="choix_paires">
</form>