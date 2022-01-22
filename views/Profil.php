<?php
session_start();

require "../views/require/Header.php";

require_once "../controller/Controller_Profil.php";

?>

<h1>Bienvenue sur votre profil <?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?></h1>

<div>
    <h2>Modifiez vos informations</h2>
    <span><?= $message ?></span>
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
require_once "../controller/Controller_Score_Profil.php";


?>
<div>
    <h2>Vos 3 Meilleurs scores</h2>
    <table>
        <thead>
            <tr>
                <td>Score</td>
                <td>Date</td>
                <td>Nombre de paires</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($score_profil as $key => $value){
                ?>
            <tr>
                <td><?= $value['score_user']?></td>
                <td><?= $value['date']?></td>
                <td><?= $value['nombre_paires']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<div>
    <h2>Vos 5 dernières parties</h2>
    <table>
        <thead>
            <tr>
                <td>Score</td>
                <td>Date</td>
                <td>Nombre de paires</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($last_score as $key => $value){
                ?>
            <tr>
                <td><?= $value['score_user']?></td>
                <td><?= $value['date']?></td>
                <td><?= $value['nombre_paires']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>


            
<?php

require "../views/require/Footer.php";