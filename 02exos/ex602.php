<?php 
    // initialiser un tableau vide
    $tab = [];

    $nombre = 1;

    // boucle remplir le tableau
    for ($i=0; $i < 10; $i++) {
    // calculer nombre * 2
    $nombre = $nombre * 2;
    // ajouter au tableau
    $tab[$i] = $nombre;
    }

    // solution 2
    for ($i=2, $j = 0; $i <= 1024 ; $i*=2, $j++) {
        $tab[$j] = $i;
    }

    // solution3
    for ($i=0; $i < 10; $i++) {
        $tab[$i] = 2 ** ($i+1);
    }

    $table = "";
    
    for ($i=0; $i < count($tab); $i++) {
        $table .= "<td>$tab[$i]</td>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 602</title>
    <style>
        table {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Exo 6.02</h1>

    <table>
        <?= $table ?>
    </table> 
</body>
</html>