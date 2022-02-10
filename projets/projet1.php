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

        $choix = $_POST["choix"];

        switch ($choix) {
            case 'plusGrand':
                $selectedPlusGrand = "selected";
                $message .= "Le plus grand est " . max($tab);
                break;
            case 'plusPetit':
                $selectedPlusPetit = "selected";
                $message .= "Le plus petit est " . min($tab);
                break;
            case 'somme':
                $selectedSomme = "selected";
                $message .= "La somme est " . array_sum($tab);
                break;
            case 'moyenne':
                $selectedMoyenne = "selected";
                $moyenne = array_sum($tab) / count($tab);
                $message .= "La moyenne est de $moyenne";
                break;
            default:
                $message .= "Erreur";
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