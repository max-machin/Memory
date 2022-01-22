<?php
session_start();

require "../views/require/Header.php";

require_once "../classes/Score.php";
$score = new Score();
$top10 = $score->HallOfFame();



?>

<h1>Hall of fame</h1>
<table>
    <h2>Top 10 Meilleurs scores</h2>
    <thead>
        <tr>
            <td>Utilisateur</td>
            <td>Score</td>
            <td>Nombre de paires</td>
            <td>Date</td>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($top10 as $key => $value){
        ?>
        <tr>
            <td><?= $value['login'] ?></td>
            <td><?= $value['score_user'] ?></td>
            <td><?= $value['nombre_paires'] ?></td>
            <td><?= $value['date'] ?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<?php

require "../views/require/Footer.php";
?>