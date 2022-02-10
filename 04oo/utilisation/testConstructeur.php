<?php 
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__."/class/Homme.php");
    require_once(__ROOT__. "/class/Femme.php");

    $jules = new Personne("Jules", "César", "100-07-13");
    $cleopatre = new Personne("D'Egypte", "Cléôpatre", "110-08-15");

    $jules->sePresenter();

    // modifier le statut de cléopatre
    $cleopatre->setEstFiance(false);
    $cleopatre->sePresenter();

    // afficher l'état de fiancé
    $cleopatre->afficherFiance();

    // la demande en mariage
    $jules->demanderEnMariage($cleopatre);

    // répondre à la demande en mariage
    $cleopatre->reponseMariage(true, $jules);
    // voir le statut
    $jules->afficherFiance();
    $cleopatre->afficherFiance();
?>