<?php
session_start();
$server_name = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
require_once "require/Header.php";

if (isset($_SESSION['user_data'])){
?>
    <h1>Bonjour <?= $_SESSION['user_data']['login'] ?></h1>
<?php
}

require_once "require/Footer.php";
?>