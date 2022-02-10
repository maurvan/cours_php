<?php 
    $tab = [1, 4, 3, 5, 2];
    $table1 = "";
    $table2 = "";

    for ($i = 0; $i < count($tab); $i++) { 
        $table1 .= "<td>$tab[$i]</td>";
    }

    // tri a bulle
    for ($i = 0; $i < count($tab) - 1; $i++) {          // main gauche
        for($j = $i + 1; $j < count($tab); $j++) {      // main droite
            if($tab[$i] > $tab[$j]) {
                // échanger
                $temp = $tab[$i];
                $tab[$i] = $tab[$j];
                $tab[$j] = $temp;
            }
        }
    }

    for ($i = 0; $i < count($tab); $i++) {
        $table2 .= "<td>$tab[$i]</td>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 612</title>
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
    <h1>Exo 6.12</h1>

    <p>Avant le tri</p>
    <table>
        <tr>
            <?= $table1 ?> 
        </tr>
    </table>

    <p>Après le tri</p>
    <table>
        <tr>
            <?= $table2 ?> 
        </tr>
    </table>
</body>
</html>