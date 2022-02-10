<?php 
    $message = "";
    $checkedPretOui = "";
    $checkedPretNon = "";

    $checkedPanierVideOui = "";
    $checkedPanierVideNon = "";

    if(isset($_POST["pret"], $_POST["panierVide"]))
    {
        // var_dump($_POST);
        $pret = ($_POST["pret"] == "true")? true : false;
        // if($_POST["pret"]== "true){
        //     $pret = true;
        // }
        // else {
        //     $pret = false;
        // }

        $panierVide = ($_POST["panierVide"] == "true")? true : false;
        // opérateur ternaire
        // $variable = (condition) ? siVrai : siFaux;


        // var_dump($pret);
        // var_dump($panierVide);

        $checkedPretOui = ($pret) ? "checked": "";
        $checkedPretNon = (!$pret) ? "checked" : "";
        $checkedPanierVideOui = ($panierVide) ? "checked": "";
        $checkedPanierVideNon = (!$panierVide) ? "checked" : "";

        if($pret && !$panierVide){
            $message = "Lancer la balle";
        }
        else {
            $message = "Ne pas lancer la balle<ul>";
            if(!$pret){
                $message .= "<li>Car vous n'êtes pas pret</li>";
            }
            if($panierVide){
                $message .= "<li>Car le panier est vide</li>";
            }
            $message .= "</ul>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2b</title>
</head>
<body>
    <h2>Exo2b</h2>
    <form action="#" method="post">
        <p>Etes-vous prêt ?</p>
        <input type="radio" name="pret" id="pretOui" value="true" <?= $checkedPretOui; ?> >
        <label for="pretOui">Oui</label>
        <input type="radio" name="pret" id="pretNon" value="false" <?= $checkedPretNon; ?>>
        <label for="pretNon">Non</label>

        <p>Le panier est-il vide ?</p>
        <input type="radio" name="panierVide" id="panierVideOui" value="true" <?= $checkedPanierVideOui; ?>>
        <label for="panierVideOui">Oui</label>
        <input type="radio" name="panierVide" id="panierVideNon" value="false" <?= $checkedPanierVideNon; ?>>
        <label for="panierVideNon">Non</label>
        <br>
        <input type="submit" value="Tester">
    </form>
    <?= $message; ?> 
</body>
</html>