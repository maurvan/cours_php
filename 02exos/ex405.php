<?php 
    $message = "";

    if (isset($_POST["tester"], $_POST["note"])) {
        $note = intval($_POST['note']);
        if ($note <= 20 && $note > 0) {
            switch ($note) {
                case 20:
                case 19:
                    $message .= "<p class='gold'>La note $note correspond à Excellent</p>";
                    break;
                
                case 18:
                case 17:
                case 16:
                    $message .= "<p class='green'>La note $note correspond à TB</p>";
                    break;

                case 15:
                case 14:
                case 13:
                    $message .= "<p class='lightgreen'>La note $note correspond à B</p>";
                    break;

                case 12:
                case 11:
                case 10:
                    $message .= "<p class='yellow'>La note $note correspond à S</p>";
                    break;

                default:
                    $message .= "<p class='orange'>La note $note correspond à I</p>";
                    break;
            }
        }
        else {
            $message .= "Entrez une note entre 0 et 20.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4.05</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
        }

        /* Couleurs */

        .gold {
            color: gold;
        }

        .green {
            color: green;
        }

        .lightgreen {
            color: lightgreen;
        }

        .yellow {
            color: yellow;
        }

        .orange {
            color: orange;
        }
    </style>
</head>
<body>
    <h1>Appréciation</h1>

    <table>
        <tr>
            <th>Note</th>
            <th>Appréciation</th>
            <th>Couleur</th>
        </tr>
        <tr>
            <td>< 10</td>
            <td>I</td>
            <td>orange</td>
        </tr>
        <tr>
            <td>10 - 12</td>
            <td>S</td>
            <td>yellow</td>
        </tr>
        <tr>
            <td>13 - 15</td>
            <td>B</td>
            <td>lightgreen</td>
        </tr>
        <tr>
            <td>16 - 18</td>
            <td>TB</td>
            <td>green</td>
        </tr>
        <tr>
            <td>>= 19</td>
            <td>Excellent</td>
            <td>gold</td>
        </tr>
    </table>
    <br>
    
    <form action="#" method="post">
        <label for="note">Entrez la note de l'étudiant :</label>
        <input type="number" name="note" id="note" step="any">
        <input type="submit" name="tester" value="Tester"><br>
        <?= $message ?>
    </form>
</body>
</html>