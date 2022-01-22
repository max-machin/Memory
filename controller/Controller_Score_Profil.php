<?php

require_once "../classes/Score.php";

$id = $_SESSION['user_data']['id'];

$score = new Score();
$score_profil = $score->TroisMeilleursScores($id);


$last_score = $score->CinqDernierScores($id);

?>