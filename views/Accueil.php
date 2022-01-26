<?php
session_start();
require_once "require/Header.php";


if (isset($_SESSION['user_data'])){
?>
    <h1 class="titre_co">Bienvenue sur votre compte <a><?= $_SESSION['user_data']['login'] ?></a></h1>
    
    <section class="section_accueil_co">
        <div>
            <h2>Depuis votre <a href="Profil.php">profil</a> vous pouvez :</h2>
            <h3>Personnalisez vos cartes</h3>
            <h3><i class="fas fa-long-arrow-alt-down"></i></h3>
            <img src="../assets/images/dos3.png" height="220px" width="160px">
            <img src="../assets/images/dos2.png" height="220px" width="160px">
            <img src="../assets/images/dos1.png" height="220px" width="160px">
            <img src="../assets/images/dos2.gif" height="220px" width="160px">
            <h3>Retrouvez vos meilleurs et derniers scores</h3>
            <h3><i class="fas fa-long-arrow-alt-down"></i></h3>
            <div>
                <table>
                    <thead>
                        <tr>
                            <td>Score</td>
                            <td>Nombre paires</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1,10</td>
                            <td>9</td>
                            <td>24/01/2022 11:56:21</td>
                        </tr>
                        <tr>
                            <td>1,17</td>
                            <td>7</td>
                            <td>22/01/2022 15:43:37</td>
                        </tr>
                        <tr>
                            <td>1,23</td>
                            <td>6</td>
                            <td>17/01/2022 14:34:12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3>Empressez-vous de rejoindre le Hall of Fame ! </h3>
            <h3><i class="fas fa-long-arrow-alt-down"></i></h3>
            <p><a href="Memory.php"> Lancer une partie</a></p>
    </section>
<?php
} else { 
?>
    <h1>Bienvenue sur <span>Memo'RIX</span></h1>
    <section class="section_accueil">
        <div class="section_cartes">
            <h2>Débloquez des cartes</h2>
            <img src="../assets/images/dos3.png" height="200px" width="140px">
            <img src="../assets/images/dos2.png" height="200px" width="140px">
            <i class="fas fa-long-arrow-alt-right"></i>
            <img src="../assets/images/lock_card.png" height="200px" width="140px">
            <img src="../assets/images/dos1.gif" height="200px" width="140px">
            <p>
                Agrandissez votre collection en réalisant des top scores!<br/><br/>
                Seul les meilleurs seront récompensés.
            </p>
            <span class="member_accueil">*Fonctionnalité réservée aux membres inscrits.</span>
        </div>
        
        <div>
            <h2>Prenez la tête du classement</h2>
            <p>Marquez la légende et votre nom dans le <br/> Hall of Fame ! </p>
                <table>
                    <thead>
                        <tr>
                            <td>Place</td>
                            <td>Score</td>
                            <td>Nombre paires</td>
                            <td>Login</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>🥇 1er</td>
                            <td>1,10</td>
                            <td>9</td>
                            <td>Boss</td>
                        </tr>
                        <tr>
                            <td>🥈 2ème</td>
                            <td>1,17</td>
                            <td>7</td>
                            <td>Vice</td>
                        </tr>
                        <tr>
                            <td>🥉 3ème</td>
                            <td>1,23</td>
                            <td>6</td>
                            <td>Cador</td>
                        </tr>
                    </tbody>
                </table>
            <br/>
            <img class="image_paires" src="../assets/images/board.gif" alt="" width="400px" height="250px">
        </div>
    </section>
    <section class="register_accueil">
        <div>
            <h2>Vous avez les cartes en main!</h2>
            <p><a href="Inscription.php">Rejoignez-nous</a></p>
        </div>
    </section>
<?php    
}

require_once "require/Footer.php";
?>