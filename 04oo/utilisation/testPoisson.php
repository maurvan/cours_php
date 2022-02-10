<?php 
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__."/class/Poisson.php");

    // construire les 2 poissons
    $poisson1 = new Poisson("Nemo", "orange", "10");
    $poisson2 = new Poisson("Dory", "bleu", "7");

    // afficher le poids
    $poisson1->afficherPoids();
    $poisson2->afficherPoids();

    // le poisson1 mange le poisson2
    $poisson1->manger($poisson2);

    // re-afficher le poids
    $poisson1->afficherPoids();
    $poisson2->afficherPoids();
?>