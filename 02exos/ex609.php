<?php 
    $tabMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    $tabJoursMois = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $table = "";

    for ($i=0; $i < count($tabMois); $i++) { 
        $table .= "<tr><td>$tabMois[$i]</td><td>$tabJoursMois[$i]</td></tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 609</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Exo 6.09</h1>

    <table>
        <?= $table ?> 
    </table>

</body>
</html>