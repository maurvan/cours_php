<?php 
    $message = "";

    for ($nombre1 = 1; $nombre1 <= 10; $nombre1++) {
        $message .= "<td>La table de $nombre1<br>";

        for ($nombre2 = 1; $nombre2 <= 10; $nombre2++) {
            $resultat = $nombre1 * $nombre2;
            $message .= "$nombre1 x $nombre2 = $resultat<br>";
        }

        $message .= "</td>";

        if ($nombre1 == 5) {
            $message .= "</tr><tr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex502</title>
    <style>
        table {
            width: 100%;
            text-align: center;
            border: 1px solid red;
        }

        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Exo 5.02</h1>

    <table>
        <tr>
            <?= $message ?>
        </tr>
    </table>
</body>
</html>