<div class="header bg-dark">
    <div class="navLeft">
        <ul>
            <li class="title">Slurp Cacahuète</li>
            <li><a href="?section=accueil">Accueil</a></li>
            <li><a href="?section=apropos">A propos</a></li>
            <li><a href="?section=contact">Contact</a></li>
            <li><a href="?section=doree">Cacahuète dorée</a></li>
        </ul>
    </div>
    <div class="navRight">
        <ul>
            <li><?= $_SESSION['nom']; ?></li>
            <li><a href="?section=deconnexion">Déconnexion</a></li>
        </ul>
    </div>
</div>