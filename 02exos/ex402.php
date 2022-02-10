<?php 
    // ** Ceinture de sécurité
    if (isset($_POST["pret"], $_POST["panierVide"])) {
        $pret = filter_var($_POST['pret'], FILTER_VALIDATE_BOOLEAN);
        $panierVide = filter_var($_POST['panierVide'], FILTER_VALIDATE_BOOLEAN);

        if ($pret && !$panierVide)
        {
            echo "Lancer la balle";
        }
        else
        {
            echo "Ne pas lancer la balle <br>";
            echo "<ul>";
            if (!$pret)
            {
                echo "<li>Car vous n'êtes pas prêt</li>";
            }
            if ($panierVide)
            {
                echo "<li>Car le panier est vide</li>";
            }
            echo "</ul>";
        }
    }
?>