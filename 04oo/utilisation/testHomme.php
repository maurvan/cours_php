<?php 
    require_once("../class/Homme.php");
    $h1 = new Homme();
    $h1->sePresenter();
    echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>";
    $h1->seRaser();
    echo "<p>Ma barbe fait : " . $h1->getLongueurBarbe() . " cm</p>";
?>