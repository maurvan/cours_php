<?php 
    $nombre = 9;

    function recherche($nombre) {
        $tab = [1,5,9,14,32];
        $resultat = -1;

        for ($i = 0; $i < count($tab); $i++) { 
            if ($tab[$i] == $nombre) {
                $resultat = $i;
            }
        }
        return $resultat;
    }

    $resultat = recherche($nombre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 102</title>
</head>
<body>
    <p>Le numéro <?= $nombre ?> est à l'indice <?= $resultat ?> </p>
</body>
</html>