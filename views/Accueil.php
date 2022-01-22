<?php
session_start();
$server_name = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
require_once "require/Header.php";

if (isset($_SESSION['user_data'])){
?>
    <h1>Bienvenue sur <span>Memo'RIX</span></h1>
    <h2>Bonjour <?= $_SESSION['user_data']['login'] ?></h2>
<?php
} else { 
?>
    <h1>Bienvenue sur <span>Memo'RIX</span><h1>

<?php    
}

require_once "require/Footer.php";
?>