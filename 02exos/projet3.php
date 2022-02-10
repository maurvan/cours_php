<?php 
    $tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    $tabJoursMois = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    $table = "";

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
            justify-content: center
        }

        div div {
            width: 50%;
            border: 1px solid black;
            padding: 10px;
            flex-flow: row wrap;
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Le calendrier</h1>

    <div>
        <div>
            <p>Voici le calendrier avec le nombre de jours par mois</p>

            <table>
                <?= $table ?> 
            </table>
        </div>
        <div>
            <p>Rechercher le nombre de jours par mois :</p>
        </div>
    </div>
</body>
</html>