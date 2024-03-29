<?php 

    if(isset($_GET["section"])){
        if(isset($_SESSION["nom"])) {
            // il est connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controllers/accueilController.php");
                    break;
                case 'apropos' :
                    include("controllers/aproposController.php");
                    break;
                case 'contact' :
                    include("controllers/contactController.php");
                    break;
                case 'doree' :
                    include("controllers/doreeController.php");
                    break;
                case 'deconnexion' :
                    include("controllers/deconnexionController.php");
                    break;
                default:
                    include("views/error/404.php");
            }
        }
        else {
            // il n'est pas connecté
            switch($_GET["section"]){
                case 'accueil' :
                    include("controllers/accueilController.php");
                    break;
                case 'apropos' :
                    include("controllers/aproposController.php");
                    break;
                case 'contact' :
                    include("controllers/contactController.php");
                    break;
                case 'connexion' :
                    include("controllers/connexionController.php");
                    break;
                case 'deconnexion' :
                    include("controllers/deconnexionController.php");
                    break;
                default:
                    include("views/error/404.php");
            }
        }
    }
    else {
        include("views/page/accueil.php");
    }
?>