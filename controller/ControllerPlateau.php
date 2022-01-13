<?php

//Si une session de jeux est défini
if (isset($_SESSION['plateau'])){

    foreach($_SESSION['plateau'] as $key => $value){
        
        if ($value->etat == "dos"){
        ?>
            <form action="" method="post">
                <button name="clique_carte">
                <img src="<?php echo $value->image_dos ?>" height="200px" width="140px" alt="image_dos">
                </button>
                <input type="hidden" name="id_carte" value="<?= $key ?>">
            </form>
        <?php
        }
        if($value->etat == "face") {
            ?>
            <form action="">
            <img src="<?php echo $value->image ?>" alt="image" height="200px" width="140px">
            </form>
            <?php
        }
    }
    if (isset($_POST['clique_carte'])){
       $_SESSION['id_carte'] = $_POST['id_carte'];
            var_dump($_SESSION['id_carte']);
    }
}


?>