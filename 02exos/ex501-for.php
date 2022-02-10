<?php 
    $message = "";

    for ($nombre = 1; $nombre <= 10; $nombre++) {
        $resultat = $nombre * 2;
        $message .= "$nombre x 2 = $resultat<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex501</title>
</head>
<body>
    <h1>Exo 5.01</h1>
    <?= $message ?> 
</body>
</html>