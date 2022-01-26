<?php
session_start();

require "../views/require/Header.php";

require_once "../controller/Controller_Profil.php";

if(isset($_SESSION['user_data'])){

?>

<h1 class="titre_co">Bienvenue sur votre profil <a><?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?></a></h1>


<div class="profil_div">
    <h2 class="titre_profil">Modifiez vos informations</h2>
    <span class="mess"><?= $message ?></span>
    <form action="" method="post">
        <label for="login">Login</label><br/>
        <input class="input_profil" id="login" type="text" name="login" value="<?php if(!isset($data)){ echo $_SESSION['user_data']['login'];} else { echo $data[0]['login'];} ?>"><br>
        <span><?= $error_login ?></span><br>

        <label for="password">Nouveau mot de passe</label><br/>
        <input class="input_profil" id="password" type="password" name="password"><br>
        <span><?= $error_password ?></span><br>

        <label for="password_conf">Confirmer mot de passe</label><br/>
        <input class="input_profil" id="password_conf" type="password" name="passwordRepeat"><br>
        <span><?= $error_passwordRep ?></span><br>

        <input class="submit_conn" type="submit" name="submit">
    </form>
</div>

<?php
require_once "../classes/Score.php";

$id = $_SESSION['user_data']['id'];

$score = new Score();
$score_profil = $score->TroisMeilleursScores($id);

$last_score = $score->CinqDernierScores($id);

?>

<section class="section_profil">
<div class="classement_table_profil">
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

<div class="classement_table_profil">
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
<section class="section_carte_profil">
    <h2> Personnalisez vos cartes </h2>
    <h3 class="classique">Classiques</h3>
    <section class="section_dos_carte">
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
$verif_score = $score->VerifScore($id);

if($verif_score >= 1){
?>
    <h3 class="legendary">Légendaires</h3>
    <section class="carte_debloquer">
        <form action="" method="post">
            <button name="dos_anime1" value="../assets/images/dos1.gif">
                <img src="../assets/images/dos1.gif" height="300px" width="200px" alt="carte2">
            </button>
            <span><?= $carte_boss ?></span>
        </form>
        <form action="" method="post">
            <button class="anime2" name="dos_anime2" value="../assets/images/dos2.gif">
                <img src="../assets/images/dos2.gif" height="300px" width="200px" alt="carte2">
            </button>
            <span><?= $carte_boss2 ?></span>
        </form>
    </section> 
</section> 
<?php
}
else {
    ?>
    <h3 class="legendary">A débloquer</h3>
    <section class="carte_debloquer">
        <form action="">
            
            <form action="">
                <button>
                    <img src="../assets/images/lock_card.png" alt="to_unlock" height="300px" width="200px" >
                </button>
            </form>
            <form action="">
                <button>
                    <img src="../assets/images/lock_card.png" alt="to_unlock" height="300px" width="200px" >
                </button>
            </form>
        </form>
    </section> 
</section>
    <?php
}

require "../views/require/Footer.php";
} else {
    header("Location: Accueil.php");
}