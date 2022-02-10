<?php 
    include("../class/Personne.php");
    $p1 = new Personne(); // instanciation d'un objet Personne
    $p1->parler("<p>Bonjour</p>"); // appel de la méthode qui lui est propre (seules les personnes savent le faire)
    $p1->sePresenter();
    $p1->donnerAge();
?>