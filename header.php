<?php
session_start();?>

<header>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Accueil</a>
                <?php if($_SESSION['username'] === "admin") : ?> 
                <a href="admin.php" class="nav-item nav-link">admin</a>
                <?php endif ?>
                <?php if(empty($_SESSION['username'])):?> 
                    <li class="connex"><a href="./connexion.php">Connexion</a>
                <?php endif ?>
                <?php if(isset($_SESSION['username'])):?> 
                    <li id="connexion"><a href="" > Bonjour <?= $_SESSION['username'] ?></a><div class="logout"><a href="./controllers/deconnexion.php">Déconnexion</a></div></li></li>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>


<footer class="page-footer font-small black"><div class="footer-copyright text-center py-4">© 2020 Copyright:</div></footer>
