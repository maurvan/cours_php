<!-- On demande à l'utilisateur de rentrer :
​                   - l'heure
	               - les minutes
    Le programme vérifie que l'heure est entre 0 et 23, les minutes entre 0 et 59
    et il affiche l'heure qu'il sera dans une minute
-->

<?php 
    $message = "";

    if (isset($_POST["tester"], $_POST["heures"], $_POST["minutes"])) {
        $heures = intval($_POST["heures"]);
        $minutes = intval($_POST["minutes"]);
       if ($heures >= 0 && $heures <= 23 && $minutes >= 0 && $minutes <= 59) {
           if ($heures != 23 && $minutes != 59) {
               $minutes++;
               $message .= "Il sera $heures"."h".$minutes;
           }
           else if ($heures != 23 && $minutes == 59) {
               $heures++;
               $message .= "Il sera $heures"."h"."00";
           }
           else {
               $message .= "Il sera 00h00";
           }
       }
       else {
           $message .= "Rentrez une heure valide";
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus 1</title>
</head>
<body>
    <form action="#" method="post">
        <label for="heures">Heure:</label>
        <input type="number" name="heures" id="heures">
        <label for="minutes">Minutes:</label>
        <input type="number" name="minutes" id="minutes">
        <input type="submit" name="tester" value="Tester">
    </form>

    <?= $message ?>
</body>
</html>