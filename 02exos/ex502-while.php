<?php 
    $nombre1 = 1;
    $message = "";

    while ($nombre1 <= 10) {
        $message .= "<td>La table de $nombre1<br>";
        $nombre2 = 1;

        while ($nombre2 <= 10) {
            $resultat = $nombre1 * $nombre2;
            $message .= "$nombre1 x $nombre2 = $resultat<br>";
            $nombre2++;
        }

        $message .= "</td>";

        if ($nombre1 == 5) {
            $message .= "</tr><tr>";
        }

        $nombre1++;
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