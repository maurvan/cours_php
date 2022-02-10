<?php 
    // 13/09/2021
    echo date("d/n/Y") . "<br>";

    // 16:14:10
    echo date("H:i:s") . "<br>";

    // Nous sommes lundi
    $tabJours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    $i = date("w");
    echo "Nous sommes $tabJours[$i] <br>";

    // Nous sommes le 13 septembre 2021
    $tabMois = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
    $j = (date("n") - 1);
    echo "Nous sommes le " . date("d") . " $tabMois[$j] " . date("Y") . "<br>";

    // Nous sommes le 1 jour de la semaine
    echo "Nous sommes le " . date("N") . " de la semaine";
?>

