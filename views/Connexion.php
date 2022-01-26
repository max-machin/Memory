<?php
session_start();

require "require/Header.php";
require "../controller/Controller_Connexion.php";
?>
<div class="container">
    <div class="box">
        <div class="content">
            <h2>Connectez-vous</h2>
            <form class="form_connexion" action="" method="post">
                <input class="input_conn" type="text" name="login" placeholder="Login *">
                <span><?= $error_login ?></span>
                <input class="input_conn" type="password" name="password" placeholder="Mot de passe *">
                <span><?= $error_password ?></span>
                <input class="submit_conn" type="submit" name="submit" value="Connexion">
            </form>
        </div>
    </div>
</div>
<svg>
    <filter id="wavy">
        <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="6" seed="7">
            <animate attributeName="baseFrequency" dur="60s" values="0.02;0.05;0.02" repeatCount="indefinite" />
        </feTurbulence>
        <feDisplacementMap in="SourceGraphic" scale="30"/>
    </filter>
</svg>
<?php
require "require/Footer.php";
?>