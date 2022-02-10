<?php 
    $tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    $table = "";

    $checkedChrono = "";
    $checkedInverse = "";

    if (isset($_POST["valider"])) {

        $ordre = $_POST["ordre"];

        if ($ordre == "chrono") {
            $table .= "<tr><td class='titre'>Mois de l'année</td></tr>";
            $checkedChrono = "checked";
            for ($i = 0; $i < count($tabMois); $i++) {
                $table .= "<tr><td>$tabMois[$i]</td></tr>";
            }
        }
        else {
            $table .= "<tr><td class='titre'>Mois de l'année</td></tr>";
            $checkedInverse = "checked";
            for ($i = (count($tabMois) - 1); $i >= 0; $i--) {
                $table .= "<tr><td>$tabMois[$i]</td></tr>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet 2</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 2px;
        }

        .titre {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Le calendrier</h1>

    <h3>Dans quel ordre souhaitez-vous qu'il s'affiche?</h3>

    <form action="#" method="post">
        <input type="radio" name="ordre" id="chrono" value="chrono" <?= $checkedChrono; ?>>
        <label for="chrono">Chronologique</label>
        <input type="radio" name="ordre" id="inverse" value="inverse" <?= $checkedInverse; ?>>
        <label for="inverse">Inverse</label>
        <input type="submit" name="valider" value="Valider">
    </form>

    <br><br>

    <table>
        <?= $table ?> 
    </table>
</body>
</html>