<?php 
    $message = "";
    if (isset($_POST["tester"])) {
        if (isset($_POST["pret"], $_POST["panierVide"])) {
            $pret = filter_var($_POST['pret'], FILTER_VALIDATE_BOOLEAN);
            $panierVide = filter_var($_POST['panierVide'], FILTER_VALIDATE_BOOLEAN);

            if ($pret && !$panierVide)
            {
                $message .= "Lancer la balle";
            }
            else
            {
                $message .= "Ne pas lancer la balle <br>";
                $message .= "<ul>";
                if (!$pret)
                {
                    $message .= "<li>Car vous n'êtes pas prêt</li>";
                }
                if ($panierVide)
                {
                    $message .= "<li>Car le panier est vide</li>";
                }
                $message .= "</ul>";
            }
        }
        else {
            $message .= "<p class='red'>Veuillez remplir les champs</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4.02c</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ex4.02 c</h1>
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
    <?= $message; ?> 
</body>
</html>