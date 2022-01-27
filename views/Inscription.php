<?php
$server_name = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

require_once "require/Header.php";
require_once "../controller/Controller_Inscription.php";
?>
<div class="container_in">
    <div class="box_in">
        <div class="content_in">
            <h2>Inscrivez-vous</h2>
            <form class="form_in" action="" method="post">
                <input class="input_in" type="text" name="login" placeholder="Login *">
                <span><?= $error_login ?></span><br/>
                <input class="input_in" type="password" name="password" placeholder="Mot de passe *"><br/>
                <span><?= $error_password ?></span>
                <input class="input_in" type="password" name="passwordRepeat" placeholder="Confirmer mot de passe *"><br>
                <span><?= $error_passwordRep ?></span>
                <input class="sub_in" type="submit" name="submit" value="S'inscrire">
            </form>
        </div> 
    </div>
</div>
<svg>
    <filter id="wavy2">
        <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="6" seed="7">
            <animate attributeName="baseFrequency" dur="60s" values="0.02;0.05;0.02" repeatCount="indefinite" />
        </feTurbulence>
        <feDisplacementMap in="SourceGraphic" scale="30"/>
    </filter>
</svg>
<?php
require "require/Footer.php";
?>