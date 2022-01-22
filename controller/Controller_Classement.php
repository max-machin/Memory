<?php

require_once "../classes/Score.php";

$score = new Score();
$top10 = $score->HallOfFame();

?>