<?php 
    $tab = [1, 4, 3, 5, 2];
    $plusGrand = $tab[0];
    $table = "";

    // parcourir le tableau et trouver le plus grand
    for ($i=0; $i < count($tab); $i++) { 
        // si le nombre dans le tableau est > que $plusGrand
        if ($tab[$i] > $plusGrand) {
            // met à jour dans le tableau
            $plusGrand = $tab[$i];
        }
        $table .= "<td>$tab[$i]</td>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 603</title>
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
    <h1>Exo 6.03</h1>

    <table>
        <tr>
            <?= $table ?> 
        </tr>
    </table>

    <p>Le plus grand est <?= $plusGrand ?> </p>
</body>
</html>