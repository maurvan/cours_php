<?php 
    // déclaration de la fonction
    function carre($nombre) {
        return $nombre * $nombre;
    }

    // appel de la fonction
    $nombre = 3;
    $resultat = carre($nombre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 101</title>
</head>
<body>
    <p>Le carré de <?= $nombre ?> est égal à <?= $resultat ?>
</body>
</html>