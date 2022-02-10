<?php 
    $annee = $_POST["annee"];

    if ($annee % 4 == 0 && $annee % 100 != 0 || $annee % 400 == 0)
    {
        echo "L'année $annee est bissextile";
    }
    else
    {
        echo "L'année $annee n'est pas bissextile";
    }
?>