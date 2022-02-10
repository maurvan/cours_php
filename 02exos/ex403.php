<?php 
    $choixBoisson = $_POST["choixBoisson"];
    $stockCoca = 0;
    $stockEau = 2;

    switch ($choixBoisson) {
        case 'Eau':
            if ($stockEau == 0)
            {
                echo "Il n'y a plus d'Eau";
            }
            else
                echo "Voici votre Eau";
            break;
        case 'Coca':
            if ($stockCoca == 0)
            {
                echo "Il n'y a plus de Coca";
            }
            else
                echo "Voici votre Coca";
            break;
        default:
            echo "Choix inconnu";
            break;
    }
?>