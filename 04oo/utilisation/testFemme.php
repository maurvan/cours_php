<?php 
    // importer
    require_once("../class/Femme.php");
    // créer une femme
    $f1 = new Femme();

    // vérifier si elle est enceinte
    $f1 -> afficheEstEnceinte();

    // vérifier si elle peut accoucher
    $f1 -> accoucher();

    // faire en sorte qu'elle devienne enceinte + nombre enfants
    $f1 -> setEnceinte();

    // elle accouche vu qu'elle est enceinte
    $f1 -> accoucher();

    // générer le sexe des enfants
    $f1 -> enfant();

    // re-vérifier si elle est enceinte
    $f1 -> afficheEstEnceinte();
?>