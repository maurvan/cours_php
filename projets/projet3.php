<?php 
    $tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    $tabJoursMois = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    $table = "<tr><td class='titre'>Mois de l'année</td><td class='titre'>Jours par mois</td></tr>";

    for ($i = 0; $i < count($tabMois); $i++) { 
        $table .= "<tr><td>$tabMois[$i]</td><td>$tabJoursMois[$i]</td></tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet 3</title>
    <style>
        html, body {
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            flex-grow: 12;
        }

        div {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
        }

        .box1 {
            width: 48%;
            border: 1px solid black;
            padding: 10px;
            flex-flow: row wrap;
        }

        .box2 {
            width: 48%;
            border: 1px solid black;
            padding: 10px;
            flex-flow: column wrap;
            align-content: space-around;
            justify-content: flex-start;
        }

        .titre {
            background-color: lightgrey;
        }

        table {
            width: 70%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            text-align: center;
            width: 50%;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Le calendrier</h1>

    <div>
        <div class="box1">
            <p>Voici le calendrier avec le nombre de jours par mois</p>

            <table>
                <?= $table ?> 
            </table>
        </div>
        <div class="box2">
            <p>Rechercher le nombre de jours par mois :</p>
            <select name="mois" id="mois">
                <option value="janvier">Janvier</option>
                <option value="fevrier">Fevrier</option>
                <option value="mars">Mars</option>
                <option value="avril">Avril</option>
                <option value="mai">Mai</option>
                <option value="juin">Juin</option>
                <option value="juillet">Juillet</option>
                <option value="aout">Aout</option>
                <option value="septembre">Septembre</option>
                <option value="octobre">Octobre</option>
                <option value="novembre">Novembre</option>
                <option value="decembre">Decembre</option>
            </select>
            <input type="submit" value="Rechercher">
        </div>
    </div>
</body>
</html>