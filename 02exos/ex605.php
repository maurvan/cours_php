<?php 
    $tab = [1,4,3,5,2];
    $table = "";
    $somme = 0;

    for ($i=0; $i < count($tab); $i++) { 
        $somme += $tab[$i];
        // equivalent à $somme + $tab[$i]
        $table .= "<td>$tab[$i]</td>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 605</title>
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
    <h1>Exo 6.05</h1>

    <table>
        <tr>
            <?= $table ?> 
        </tr>
    </table>

    <p>La somme est <?= $somme ?> </p>
</body>
</html>