<?php 
    // créer une constante qui contient le chemin de tout le dossier source
    // dirname : fonction qui retourne le chemin du dossier parent
    define('__ROOT__', dirname(dirname(__FILE__)));
    // importer les classes
    require_once(__ROOT__."/class/Homme.php");
    require_once(__ROOT__. "/class/Femme.php");

    // création d'un homme + mise à jour du nom et prenom
    $jules = new Homme("César", "Jules", "1950-07-07");

    // création d'une femme + mise à jour du nom et prenom
    $cleopatre = new Femme("D'Egypte", "Cléopatre", "1955-01-01");

    // afficher l'etat de fiancé
    $jules->afficherFiance();
    $cleopatre->afficherFiance();

    // la demande en mariage
    $jules->demanderEnMariage($cleopatre);
    $cleopatre->demanderEnMariage($jules);
    $cleopatre->demanderEnMariage($cleopatre); // => ERREUR

    // la réponse
    $jules->reponseMariage(true, $cleopatre);

    // afficher l'etat de fiancé
    $jules->afficherFiance();
    $cleopatre->afficherFiance();
?>