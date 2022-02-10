<?php 
    $tabSeptembre = [20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17];
    $table = "";
    $somme = 0;

    for ($i=0; $i < count($tabSeptembre); $i++) {
        $table .= "<td>$tabSeptembre[$i]</td>";
        $somme = $tabSeptembre[$i] + $somme;
    }

    $moyenne = $somme / count($tabSeptembre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 611</title>
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
    <h1>Exo 6.11</h1>

    <table>
        <tr>
            <?= $table ?> 
        </tr>
    </table>

    <p>La température moyenne est de <?= $moyenne ?>°C</p>

</body>
</html>