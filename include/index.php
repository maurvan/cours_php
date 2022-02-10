<?php 
    session_start();
    ob_start();

    include("views/html/head.php");

    include("controllers/menuController.php");

    include("controllers/router.php");

    include("views/html/footer.php");
?>