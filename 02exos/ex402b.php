<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4.02b</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ex4.02 b</h1>
    <form action="#" method="post">
        <label for="pret">Etes vous prêt?</label>
        <input type="radio" name="pret" id="pretTrue" value="true">
        <label for="pretTrue">Oui</label>
        <input type="radio" name="pret" id="pretFalse" value="false">
        <label for="pretFalse">Non</label><br>
        <label for="panierVide">Le panier est-il vide?</label>
        <input type="radio" name="panierVide" id="panierVide" value="true">
        <label for="panierVide">Oui</label>
        <input type="radio" name="panierVide" id="panierRempli" value="false">
        <label for="panierRempli">Non</label><br>
        <input type="submit" name="tester" value="Tester">
    </form>

<?php 
    // ** Ceinture de sécurité
    // si le formulaire a été soumis (J'ai appuyé sur Tester)
    if (isset($_POST["tester"])) {
        // si le formulaire est vide (pret et panierVide sont )
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
        else {
            echo "<p class='red'>Veuillez remplir les champs</p>";
        }
    }
?>
</body>
</html>