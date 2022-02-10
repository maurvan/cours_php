<?php 
    $tab = [1, 4, 3, 5, 2];
    $table = "";
    $message = "";

    $selectedPlusGrand = "";
    $selectedPlusPetit = "";
    $selectedSomme = "";
    $selectedMoyenne = "";

    for ($i = 0; $i < count($tab); $i++) { 
        $table .= "<td>$tab[$i]</td>";
    }

    if (isset($_POST["rechercher"])) {
        $plusGrand = $tab[0];
        $plusPetit = $tab[0];
        $somme = 0;
        $moyenne = 0;

        $choix = $_POST["choix"];

        switch ($choix) {
            case 'plusGrand':
                $selectedPlusGrand = "selected";
                for ($i = 0; $i < count($tab); $i++) { 
                    if ($tab[$i] > $plusGrand) {
                        $plusGrand = $tab[$i];
                    }
                }
                $message .= "Le plus grand est $plusGrand";
                break;
            case 'plusPetit':
                $selectedPlusPetit = "selected";
                for ($i = 0; $i < count($tab); $i++) { 
                    if ($tab[$i] < $plusPetit) {
                        $plusPetit = $tab[$i];
                    }
                }
                $message .= "Le plus petit est $plusPetit";
                break;
            case 'somme':
                $selectedSomme = "selected";
                for ($i = 0; $i < count($tab); $i++) { 
                    $somme = $somme + $tab[$i];
                }
                $message .= "La somme est $somme";
                break;
            case 'moyenne':
                $selectedMoyenne = "selected";
                for ($i = 0; $i < count($tab); $i++) {
                    $somme = $somme + $tab[$i];
                    $moyenne = $somme / count($tab);
                }
                $message .= "La moyenne est de $moyenne";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet 1</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 500px;
            text-align: center;
        }

        td {
            border: 1px solid black;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Projet 1</h1>

    <table>
        <tr>
            <?= $table ?> 
        </tr>
    </table>

    <br><br>

    <form action="#" method="post">
        <select name="choix" id="choix">
            <option value="plusGrand" <?= $selectedPlusGrand ?> >Plus Grand</option>
            <option value="plusPetit" <?= $selectedPlusPetit ?> >Plus Petit</option>
            <option value="somme" <?= $selectedSomme ?> >Somme</option>
            <option value="moyenne" <?= $selectedMoyenne ?> >Moyenne</option>
        </select>
        <input type="submit" name="rechercher" value="Rechercher">
    </form>

    <p><?= $message ?> </p>
</body>
</html>