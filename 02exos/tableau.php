<?php 
    $tab = array("1", 2.5, '3', 4, true);
    $tab2 = ["1", 2.5, "3", 4, false];
    var_dump($tab);

    echo "La taille du tableau est : " . count($tab) . "<br>";

    // parcourir
    for ($i=0; $i < count($tab); $i++) { 
        echo "$tab[$i]<br>";
    }

    // affectation (modifier)
    $tab2[2] = "B";
    var_dump($tab2);
?>