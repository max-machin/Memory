<?php
session_start();

require "../views/require/Header.php";

require_once "../controller/Controller_Profil.php";

?>

<h1>Bienvenue sur votre profil <?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?></h1>

<section class="section_profil">
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
require_once "../classes/Score.php";

$id = $_SESSION['user_data']['id'];

$score = new Score();
$score_profil = $score->TroisMeilleursScores($id);


$last_score = $score->CinqDernierScores($id);


?>
<div>
    <h2>Vos 3 Meilleurs scores</h2>
    <table>
        <thead>
            <tr>
                <td>Score</td>
                <td>Nombre de paires</td>
                <td>Date</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($score_profil as $key => $value){
                ?>
            <tr>
                <td><?= $value['score_user']?></td>
                <td><?= $value['nombre_paires']?></td>
                <td><?= $value['date']?></td>
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
                <td>Nombre de paires</td>
                <td>Date</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($last_score as $key => $value){
                ?>
            <tr>
                <td><?= $value['score_user']?></td>
                <td><?= $value['nombre_paires']?></td>
                <td><?= $value['date']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</section>

<?php
require_once "../controller/Controller_Carte_Profil.php";
?>

<section class="section_carte">
    <form action="" method="post">
        <button name="dos1" value="../assets/images/dos1.png"><img src="../assets/images/dos1.png" height="300px" width="200px" alt="carte1"></button>
        <span><?= $carte_choisie1 ?></span>
    </form>
    <form action="" method="post">
        <button name="dos2" value="../assets/images/dos2.png"><img src="../assets/images/dos2.png" height="300px" width="200px" alt="carte2"></button>
        <span><?= $carte_choisie2 ?></span>
    </form>
    <form action="" method="post">
        <button name="dos3" value="../assets/images/dos3.png"><img src="../assets/images/dos3.png" height="300px" width="200px" alt="carte2"></button>
        <span><?= $carte_choisie3 ?></span>
    </form>
</section>
            
<?php

require "../views/require/Footer.php";