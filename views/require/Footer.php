<?php
if (isset($_SESSION['user_data'])){
?>
<footer>
        <div class="bloc_footer">
            <div>
                <h2>Navigation</h2><hr>
                <ol>
                <li><a href="Memory.php">Memory <i class="fas fa-brain"></i></a></li>
                <li><a href="Classement.php">Hall of fame <i class="fas fa-medal"></i></a></li>
                <li><a href="Profil.php">Profil <i class="far fa-user"></i></a></li>
                <li><a class="deco" href="Deconnexion.php">Deconnexion<i class="far fa-times-circle"></i></a></li>
                </ol>
            </div>
            <div  class="flex_footer">
                <h2>Retrouvez nous sur : </h2><hr>
                <ol>
                    <li><a href="https://store.steampowered.com/" target="_blank"><i class="fab fa-steam-square"></i></a></li>
                    <li><a href="https://fr.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/max-machin" target="_blank"><i class="fa-brands fa-github-square"></i></a></li>
                </ol>
            </div>
        </div>
        <p class="copyright">@2021-2022 Memo'RIX'</p>
    </footer>

<?php
}else {
?>
    <footer>
        <div class="bloc_footer">
            <div>
                <h2>Navigation</h2><hr>
                <ol>
                    <li><a href="Memory.php">Memory <i class="fas fa-brain"></i></a></li>
                    <li><a href="Classement.php">Hall of fame <i class="fas fa-medal"></i></a></li>
                    <li><a href="Connexion.php">Connexion</a></li>
                    <li><a href="Inscription.php">Inscription</a></li>
                </ol>
            </div>
            <div  class="flex_footer">
                <h2>Reseaux sociaux</h2><hr>
                <ol>
                    <li><a href="https://store.steampowered.com/" target="_blank"><i class="fab fa-steam-square"></i></a></li>
                    <li><a href="https://fr.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/max-machin" target="_blank"><i class="fa-brands fa-github-square"></i></a></li>
                </ol>
            </div>
        </div>
        <p class="copyright">@2021-2022 Memo'RIX'</p>
    </footer>
<?php
}
?>
</body>
</html>