<?php 
    $nb1 = 5;
    $nb2 = 7;
    echo "Avant: nombre1 = $nb1 nombre2 = $nb2 <br>";

    $temp = $nb1;
    $nb1 = $nb2;
    $nb2 = $temp;

    echo "Après: nombre1 = $nb1 nombre2 = $nb2";
?>